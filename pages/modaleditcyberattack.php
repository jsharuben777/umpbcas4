<?php
 include "../pages/lib/db_config.php";
 
  if(ISSET($_POST['updatedata'])){
        $ID = $_POST['ID'];
        $Day = $_POST['Day'];
        $Month = $_POST['Month'];
        $Year = $_POST['Year'];
        $Cyber_Attack_Details = $_POST['Cyber_Attack_Details'];
        $Time = $_POST['Time'];
        $Status = $_POST['Status'];
        $Threat_Level = $_POST['Threat_Level'];
        $Description = $_POST['Description'];

        $updatenewdata ="UPDATE detectiondata SET 
         Day = '$Day',Year = '$Year', Cyber_Attack_Details = '$Cyber_Attack_Details',Time = '$Time',Status = '$Status',Threat_Level = '$Threat_Level',Description = '$Description' WHERE ID = $ID";
         $query_run = mysqli_query($conn , $updatenewdata);

         if($query_run){
             echo '<script> alert ("Data Updated); </script>';
             header("location:selectdetection.php");
         }
         else{
             echo '<script> alert ("Data Not Updated"); </script>';
         }

  }





//     mysqli_query($conn, "UPDATE `detectiondata` SET `Day` = '$Day',
//      `Year` = '$Year',
//      `Cyber_Attack_Details` = '$Cyber_Attack_Details',
//      `Time` = '$Time',
//      `Status` = '$Status',
//      `Threat_Level` = '$Threat_Level',
//      `Description` = '$Description',
//       WHERE `ID` = '$ID'") or die(mysqli_error($conn));
 
//     header("location: selectdetection.php");
//   }ook try ook 
?>

        
        