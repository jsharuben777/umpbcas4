<?php

if(isset($_FILES['excelfile']['name'])) {
     $conn = mysqli_connect("localhost","root","","umpbcas2");
     include "../pages/lib/xls.php";
     if($conn){
         $excel=SimpleXLSX::parse($_FILES['excelfile']['tmp_name']);
         $excel->rows();
         echo "<pre>" ;
        //   print_r($excel->rows());
        print_r($excel->dimension());
        print_r($excel->sheetNames());
        for ($sheet=0; $sheet <sizeof ($excel->sheetNames()) ; $sheet++) { 
                     //     # code...
                     $rowcol=$excel->dimension($sheet);
                     $i = 0;
                     if($rowcol[0]!=1 &&$rowcol[1]!=1){
                     foreach($excel->rows($sheet) as $key => $row) {
                         // print_r($row);
                         $q="";
           

                           foreach($row as $key => $cell) {
                                    // print_r($cell);echo "<br>";
                                    if($i==0){
                                        $q.=$cell. " varchar(50),";
                                    }else{
                                        $q.="'".$cell. "',";
                                    }
                            }

                           if($i==0){
                               $query="CREATE table detectiondata  (ID int(255) AUTO_INCREMENT PRIMARY KEY ," .rtrim($q,",").");";   
                   
                            
                           }
                        //    elseif($i==29){
                        //     $query="ALTER TABLE ".$excel->sheetName($sheet)." ADD CONSTRAINT ".$excel->sheetName($sheet)."_pk PRIMARY KEY (dataid) ; ";
                           
                        // }
                           else {
                            
                               $query="INSERT INTO " .$excel->sheetName($sheet)." values (0,".rtrim($q,",").");";
                               
                           }
                           echo $query;
                           if(mysqli_query($conn,$query))
                           {
                               echo"true";
                           }
                           else{
                               echo"failed";
                            }
                    

                              echo "<br>";
                              $i++;
                              
                     }
                    }
        }

     }

    }

?>



<a href="http://localhost/umpbcas2/pages/selectdetection.php"><button>View Cyber Attack Detection List</button></a>