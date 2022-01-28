<?php
$content = 'This is about us page content';
include('master.php');
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles/testingStyles.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "umpbcas2";

    $sql = "SELECT Cyber_Attack_Details, count(*) as number FROM detectiondata GROUP BY Cyber_Attack_Details";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $result = mysqli_query($conn, $sql);
    $getquarter = $_GET['quarter'];

    if ($getquarter == 1) {
        $quarter = "('JAN','FEB','MAR')";
    } elseif ($getquarter == 2) {
        $quarter = "('APR','MAY','JUN')";
    } elseif ($getquarter == 3) {
        $quarter = "('JULY','AUG','SEPT')";
    } elseif ($getquarter == 4) {
        $quarter = "('OCT','NOV','DEC')";
    } else {
    }

    $sql2 = "SELECT Month, count(*) as number FROM  detectiondata  WHERE Month IN $quarter  GROUP BY Month";
    $result2 = mysqli_query($conn, $sql2);
    $total = 0;
    while ($row = mysqli_fetch_assoc($result2)) {
        $total += $row['number'];
    }

    $sql3 = "SELECT Threat_Level, count(*) as number FROM detectiondata WHERE Month IN $quarter GROUP BY Threat_Level;";
    $result3 = mysqli_query($conn, $sql3);
    $total2 = [];
    while ($row = mysqli_fetch_assoc($result3)) {
        array_push($total2, $row);
    }
    $sql4 = "SELECT Cyber_Attack_Details, count(*) as number FROM detectiondata WHERE Month IN $quarter GROUP BY Cyber_Attack_Details;";
    $result4 = mysqli_query($conn, $sql4);
    $total3 = [];
    while ($row = mysqli_fetch_assoc($result4)) {
        array_push($total3, $row);
    }
    $sql5 = "SELECT Time, count(*) as number FROM detectiondata WHERE Month IN('JAN','FEB','MAR') GROUP BY Time;";
    $result5 = mysqli_query($conn, $sql5);
    // like a  pinggan to hold data
    $total4 = [];
    // fetch data to associative array
    while ($row = mysqli_fetch_assoc($result5)) {
        array_push($total4, $row);
    }

    $sql6 = "SELECT Threat_Level, count(*) as number FROM detectiondata WHERE Month IN $quarter  GROUP BY Threat_Level;";
    $result6 = mysqli_query($conn, $sql6);
    $total5 = [];
    while ($row = mysqli_fetch_assoc($result6)) {
        array_push($total5, $row);

        $casethreatnumber = [];
        while ($row = mysqli_fetch_array($result6)) {

            array_push($casethreatnumber, $row);
        }
    }

    $sql7 = "SELECT Threat_Level= 'HIGH' , count(*) as number FROM detectiondata WHERE Month IN ('JAN')  GROUP BY Threat_Level;";
    $result7 = mysqli_query($conn, $sql7);
    $total6 = [];
    while ($row = mysqli_fetch_assoc($result7)) {
        array_push($total6, $row);

        $janhighrisknumber = [];
        while ($row = mysqli_fetch_array($result7)) {

            array_push($janhighrisknumber, $row);
        }
    }

    $sql8 = "SELECT Cyber_Attack_Details, count(*) as number FROM detectiondata  WHERE Month IN ('JAN') GROUP BY Cyber_Attack_Details; ";
    $result8 = mysqli_query($conn, $sql8);
    $total7 = [];
    while ($row = mysqli_fetch_assoc($result8)) {
        array_push($total7, $row);

        $columnchart = [];
        while ($row = mysqli_fetch_array($result8)) {

            array_push($columnchart, $row);
        }
    }

    $sql9 = "SELECT Cyber_Attack_Details, count(*) as number FROM detectiondata  WHERE Month IN ('FEB') GROUP BY Cyber_Attack_Details; ";
    $result9 = mysqli_query($conn, $sql8);
    $total8 = [];
    while ($row = mysqli_fetch_assoc($result9)) {
        array_push($total8, $row);

        $columnchart2 = [];
        while ($row = mysqli_fetch_array($result9)) {

            array_push($columnchart2, $row);
        }
    }

    $sql10 = "SELECT Cyber_Attack_Details, count(*) as number FROM detectiondata  WHERE Month IN ('MAR') GROUP BY Cyber_Attack_Details; ";
    $result10 = mysqli_query($conn, $sql10);
    $total9 = [];
    while ($row = mysqli_fetch_assoc($result10)) {
        array_push($total9, $row);

        $columnchart3 = [];
        while ($row = mysqli_fetch_array($result10)) {

            array_push($columnchart3, $row);
        }
    }

    $sql11 = "SELECT Month, count(*) as number FROM detectiondata  GROUP BY Month; ";
    $result11 = mysqli_query($conn, $sql11);
   
    
    // $sql6 = "SELECT firstname FROM register_user ";
    // $result5 = mysqli_query($conn, $sql6);
    // $total5 = [];
    // while ($row = mysqli_fetch_assoc($result5)) {
    //     array_push($total5, $row);
    // }
    // var_dump($total);
    // die;
    ?>
<!-- CHART 1 : 3D Piechart -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Cases per Month'],
          <?php
                $piechart3d = [];
                while ($row = mysqli_fetch_array($result11)) {
                    echo "['" . $row["Month"] . "', " . $row["number"] . "],";
                    array_push($piechart3d, $row);
                }
                ?>
          
        ]);

        var options = {
          title: 'Monthly Cyber Attack Cases breakdown',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  


    <!-- CHART 2 : This is piechart -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Cyber_Attack_Details', 'Number'],
                <?php
                $piechart = [];
                while ($row = mysqli_fetch_array($result)) {
                    echo "['" . $row["Cyber_Attack_Details"] . "', " . $row["number"] . "],";
                    array_push($piechart, $row);
                }
                ?>
            ]);

            var options = {
                title: 'Types of Cyber Attacks detected :'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
        <?php
        //   $sql = "SELECT Cyber_Attack_Details, count(*) as number FROM detectiondata GROUP BY Cyber_Attack_Details" ;
        ?>
    </script>
    </div>
    <!-- CHART 3 NEW : This is combo graph -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          <?php
                $combochart = [];
                while ($row = mysqli_fetch_array($result8)) {
                    echo "['" . $row["Month"] . "', " . $row["number"] . "],";
                    array_push($combochart, $row);
                }
                ?>
          
        ]);

        var options = {
          title : 'Monthly Cases per Cyber Attack Type',
          vAxis: {title: 'Cases'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('combo_chart'));
        chart.draw(data, options);
      }
    </script>
    

    <!-- CHART 4 :This is Column Chart -->
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Month", "Cases", {
                    role: "style"
                }],
                
                ["Jan", 28, "#b87333"],
                ["Feb", 29, "silver"],
                ["Mar", 29, "gold"],

            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                title: "Number of Cyber Attack Cases for the months of ",
                width: 700,
                height: 200,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart = new google.visualization.BarChart(document.getElementById("third_chart"));
            chart.draw(view, options);
        }
    </script>
    <div id="barchart_values" style="width: 500px; height: 100px;"></div>
    <!-- CHART 5 : Area Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Attack Type', ' Frequency of Attack '],

                ['DDOS', 24],
                ['Malware', 24],
                ['Mitm', 18],
                ['SQL Injection', 21],
                ['Spyware', 1]
               
            ]);

            var options = {
                title: 'Number of Cyber Attack by Attack Type',
                hAxis: {
                    title: 'Attack Type',
                    titleTextStyle: {
                        color: '#333'
                    }
                },
                vAxis: {
                    minValue: 0
                }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_divs'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>

    <div class="row ">
        <div class="col-9">
            <h1>Cyber Attack Data Report</h1>
            <!-- <button onclick="window.print()">
<a href="#" class="d-none d-sm-inline-block btn  btn-warning shadow-sm"><i class="fas fa-download fa-sm text-white-150"></i> Generate Report</a>
                    </div></button> -->
        </div>
        <div class="col-2">
            <button onclick="window.print()" class="btn btn-primary float-end">Generate Report</button>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Cyber Attack month </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                <?= $quarter; ?>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Number of Cyber Attacks</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $total; ?>


                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-eye fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Severity of Cyber Attacks</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $total2[array_search(max(array_column($total2, "number")), array_column($total2, "number"))]["Threat_Level"]; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Most Frequent Cyber Attack Type </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $total3[array_search(max(array_column($total3, "number")), array_column($total3, "number"))]["Cyber_Attack_Details"]; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- =======================================================3d PIECHART================================================================= -->
        <!-- This is the CHART 0 : 3d piechart -->
        
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 ">
                <div class="card-body">
        <div class="card shadow mb-4">
            <div class="row">
                <div class="column left">
                    <div id="piechart_3d" style="width: 660px; height: 260px;" style="background-color:#ccc;"></div>
                </div>
                <div class="column right" style="background-color:#27613b;">
                    <br>
                    <h6>This 3d-piechart shows the Cyber Attack Types , for the months of <?= $quarter; ?>
                        <br>
                        <br>

                        <p>


                            <?php
                            foreach ($piechart3d as $row) {

                                echo " There are a total of " . $row['number'] .  " cyber attack cases in "  . $row['Month'] .   ". ";
                                
                            } ?>
                        </p>
                    </h6>
                </div>
            </div>
        </div>
        </div>
            </div>
        </div>
        <!-- =======================================================PIECHART================================================================= -->
        <!-- This is the CHART 1 : piechart -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 ">
                <div class="card-body">
        <div class="card shadow mb-4">
            <div class="row">
                <div class="column left">
                    <div id="piechart" style="width: 660px; height: 260px;" style="background-color:#ccc;"></div>
                </div>
                <div class="column right" style="background-color:#27613b;">
                    <br>
                    <h6>This piechart shows the Cyber Attack Types , for the months of <?= $quarter; ?>
                        <br>
                        <br>

                        <p>


                            <?php
                            foreach ($piechart as $row) {

                                echo " It its detected that there are " . $row['number'] .  " cases of "  . $row['Cyber_Attack_Details'] . ".";
                                
                            } ?>
                        </p>
                    </h6>
                </div>
            </div>
        </div>
        </div>
            </div>
        </div>
<!-- =======================================================combo CHART================================================================= -->
        <!-- This is the CHART 2 : Scatterplot graph -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
        <div class="card shadow mb-4">
            <div class="row">
                <div class="column left">
                    <div id="combo_chart" style="width: 650px; height: 260px;" class="charts"></div>
                </div>
                <div class="column right" style="background-color:#27613b;">
                   
                    <h6>This combo chart shows the specific case count , for the months of <?= $quarter; ?>
                  
                    <br>
                    <p>

<h8>
<br>
                            <br>
                        <?php
                            foreach ($columnchart as $row) {

                                echo "". $row['number'] .  " cases of ". $row['Cyber_Attack_Details'] .   " in  January ,";
                                
                            } ?>
                            <br>
                            <br>
                            <?php
                            foreach ($columnchart2 as $row) {

                                echo " " . $row['number'] .  " cases of ". $row['Cyber_Attack_Details'] .   " in  February ,";
                                
                            } ?>
                              <br>
                              <br>
                            <?php
                            foreach ($columnchart3 as $row) {

                                echo "  " . $row['number'] .  " cases of ". $row['Cyber_Attack_Details'] .   " in  March ,";
                                
                            } ?>
                    </h8>
                        
                        
                    </p> 
                        <br>
                        <br>
                        

                    </h6>
                </div>
            </div>
        </div>
        </div>
            </div>
        </div>
       

        <!-- =======================================================Column CHART================================================================= -->
        <!-- This is the  CHART 3 : columnchart graph -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
        <div class="card shadow mb-4">
            <div class="row">
                <div class="column left">
                    <div id="third_chart" style="width: 650px; height: 200px;"></div>
                </div>
                <br>
                <div class="column right" style="background-color:#27613b;">
                <h6>This column chart shows the Quantity of Cyber attacks , for the months of <?= $quarter; ?>
                    <br>
                    <br>
                    <p>This column chart shows the month of Quantity of Cyber attacks for the months of <?= $quarter; ?>
                        The number of cases in Jan is LESS than FEBRUARY
                        <br>
                        The number of cases in Feb is SAME with Mar
                        </p>
                </div>
            </div>
        </div>
        </div>
            </div>
        </div>


        <div class="col-xl-12 col-md-6 mb-4">

            <div class="card border-left-success shadow h-100 py-2  bg-dark text-black">
                <div class="card-body">
        <!-- This is the information box 3 boxes -->
        <div class="card shadow mb-6">
           
            <div class="row">
                <?php

                foreach ($total2 as $row) {

                ?>
                    <div class="col-4">
                        <div style="width: 100px; height: 50px;"></div>
                        <div class="container ">
                        <h5> Number of <?php echo "" . $row['Threat_Level'] . "" ?> Risk Cases Detected ? </h5>
                        
                        <div class="child">
                        <h3><?php echo $row['number']  ?></h3>
                        <br>
                <br>
                        </div>
                    </div>

                        <h6>
                            
                        </h6>
                    </div>
                <?php  } ?>
                

                <div class="container">
                
                <h7>
                <?php
                            foreach ($total2 as $row) {

                                echo " It is detected that there are " . $row['number'] .  " cases of risk "  . $row['Threat_Level'] . ".";
                                
                            } ?>
                            </h7>
            </div>
        </div>
            
        </div>
                </div>
            </div>
        </div>
<br>

        <div class="row">
            <<div class="column secondlefty">
                <h4> What are the possible consequences ? </h4>
        
                <h6> A successful cyber attack can cause major damage to your business.
                    <br>
                    <br>
                    Data protection and privacy laws require you manage the security of all personal data you hold - whether on your staff or your customers. If this data is accidentally or deliberately compromised, and you have failed to deploy appropriate security measures, you may face fines and regulatory sanctions.
                    <br>
                    <br>
                    Security breaches can devastate even the most resilient of businesses. It is extremely important to manage the risks accordingly.
                    <br>
                </h6>
        </div>

        <div class="column secondrighty">
            <h4> Cost estimation ?</h4>
            <h6><?php
                $actiontaken2 = '';
                $threatlevel = $total2[array_search(max(array_column($total2, "number")), array_column($total2, "number"))]["Threat_Level"];

                if ($threatlevel == 'LOW') {
                    $actiontaken2 = 'Threat detected . Budgeted RM 10 - RM100 Download opensource antivirus for website (Suggestion:SSL encryption )';
                } elseif ($threatlevel == 'MEDIUM') {
                    $actiontaken2 = 'Threat detected  . Budgeted RM 500 - RM1000 Download opensource antivirus for website (Suggestion:Zeek , Open DLP)';
                } elseif ($threatlevel == 'HIGH') {
                    $actiontaken2 = 'Threat detected . Budgeted RM 10,000 - RM20,000 Download professional antivirus software for website (Suggestion: Splunk , FireStrike )';
                }



                ?>
                <?= $total2[array_search(max(array_column($total2, "number")), array_column($total2, "number"))]["Threat_Level"]; ?> <?php echo $actiontaken2 ?></h6>
        </div>
                
        <!-- =======================================================AREA CHART================================================================= -->
        <!-- This is the  CHART 3 : area chart graph -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
        <div class="card shadow mb-4">
            <div class="row">
                <div class="column left">
                    <div id="chart_divs" style="width: 650px; height: 270px;"></div>
                </div>
                <div class="column right" style="background-color:#27613b;">
                <h6>This area chart shows the data for Type of Cyber Attack detected relative to one another and its frequency , for the months of <?= $quarter; ?>
                    <br>
                    <br>
                    <p>The area chart here depicts the data for Type of Cyber Attack detected and its frequency for the month of <?= $quarter; ?> We can see that the
                        <?php
                        foreach ($piechart as $row) {

                            echo " We can see that " . $row['number'] .  " cases of "  . $row['Cyber_Attack_Details'] . ".";
                        } ?>
                    </p>
                </div>
            </div>
        </div>
        </div>
            </div>
        </div>

        <div class="col-xl-12 col-md-6 mb-4 ">
            <div class="card border-left-success shadow h-100 py-2  bg-dark text-black">
                <div class="card-body">
        <div class="row">
            <<div class="column secondlefty ">
                <h4> Affects of not taking action ? </h4>
                <h6> A number of fatal outcomes may arise . Some are :
                    <br>
                    <br>
                    Data theft , Data loss , Privacy Breaches , Maniuplation of explicit data
                    <br>
                    <br>
                    This can interrupt system functions & cause system malfunctions . Safety of system will be unreliable
                    <br>
                </h6>
        </div>

        <div class="column secondrighty">
            <h4> Forecasting ?</h4>
            <h6><?php
                $actiontaken2 = '';
                $threatlevel = $total2[array_search(max(array_column($total2, "number")), array_column($total2, "number"))]["Threat_Level"];

                if ($threatlevel == 'LOW') {
                    $actiontaken2 = 'Probability for system failure is Low .Possible fatal errors are minimal . Do ensure system is monitored and antivirus is used';
                } elseif ($threatlevel == 'MEDIUM') {
                    $actiontaken2 = 'Probability for system failure is Medium .Possible fatal errors are nominal . Do ensure system is monitored and seek helpdesk for Intrusion prevention support';
                } elseif ($threatlevel == 'HIGH') {
                    $actiontaken2 = 'Probability for system failure is High .Possible fatal errors are CRITICAL . Do ensure system is monitored and seek helpdesk IMMEDIATELY for Intrusion prevention support';
                }



                ?>
                <?= $total2[array_search(max(array_column($total2, "number")), array_column($total2, "number"))]["Threat_Level"]; ?> <?php echo $actiontaken2 ?></h6>
        </div>
    </div>
            </div>
        </div>

    </div>
    <br>
    < <br>
        <br>
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">


                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">

                                Suggestion based on Report Analysis</div>
                            <?php
                            $actiontaken = '';
                            $threatlevel = $total2[array_search(max(array_column($total2, "number")), array_column($total2, "number"))]["Threat_Level"];

                            if ($threatlevel == 'LOW') {
                                $actiontaken = 'Maintain system functions of the website . But keep aware of malicious attacks since Danger of Cyber Attacks detected are LOW ';
                            } elseif ($threatlevel == 'MEDIUM') {
                                $actiontaken = 'Hold off system functions of the website temporarily . Malicious attacks are detected at a MEDIUM level . Do contact the Administrator for servicing the website !since Danger of Cyber Attacks detected are MEDIUM';
                            } elseif ($threatlevel == 'HIGH') {
                                $actiontaken = 'Immediately STOP system functions of the website due to massive number of Cyber Attack  . Malicious attacks are detected at a HIGH level . Immediately  contact the Administrator for servicing the website !since Danger of Cyber Attacks detected are HIGH';
                            }



                            ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Based on the report , for the month of <?= $quarter; ?> the action to be taken if the severity is

                                <?= $total2[array_search(max(array_column($total2, "number")), array_column($total2, "number"))]["Threat_Level"]; ?> that is to <?php echo $actiontaken ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-2">
                    <h5 class="m-0 font-weight-bold text-primary">Report handled by</h5>
                </div>

                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../images/users.png" alt="User picture">

                        <h5>
                            <br>
                            Administrator First Name : Jay
                            <br>
                            Administrator Last Name : Sharuben
                            <br>
                            Administrator E-mail : jsharuben777@gmail.com
                            <br>
                        </h5>


                    </div>
                </div>
            </div>



        </div>
        </div>

        </div>
        <!-- /.container-fluid -->

        </div>



</body>
