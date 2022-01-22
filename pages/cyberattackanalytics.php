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
    // $sql6 = "SELECT firstname FROM register_user ";
    // $result5 = mysqli_query($conn, $sql6);
    // $total5 = [];
    // while ($row = mysqli_fetch_assoc($result5)) {
    //     array_push($total5, $row);
    // }
    // var_dump($total);
    // die;
    ?>

    <!-- CHART 1 : This is piechart -->
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
    <!-- CHART 2 : This is Line Graph -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Risk', 'Number of Cases'],
                ['Jan', 15, 28],
                ['Feb', 42, 29],
                ['Mar', 35, 29],
                
            ]);

            var options = {
                title: 'Relationship between Risk and Cyber Attack Cases ',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('second_chart'));

            chart.draw(data, options);
        }
    </script>

    <div class="" id="chart_div" style="width: 200px; height: 100px;"></div>


    <!-- CHART 3 :This is Column Chart -->
    <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Month", "Cases", { role: "style" } ],
        ["Jan", 28, "#b87333"],
        ["Feb", 29, "silver"],
        ["Mar", 29, "gold"],
       
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Number of Cyber Attack Cases for the months of ",
        width: 700,
        height: 200,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("third_chart"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" style="width: 500px; height: 100px;"></div>


  


    <!-- CHART 4 : Area Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Attack Type',' Frequency of Attack '],
                ['DDOS', 23],
                ['Malware', 24],
                ['Mitm', 18],
                ['SQL Injection', 21],
               
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

<body>

    <div class="row">
        <div class="col-10">
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
        <!-- This is the CHART 1 : piechart -->
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

        <!-- This is the CHART 2 : Scatterplot graph -->

        <div class="card shadow mb-4">
            <div class="row">
                <div class="column left">
                    <div id="second_chart" style="width: 650px; height: 200px;" class="charts"></div>
                </div>
                <div class="column right" style="background-color:#27613b;">
                    <br>
                    <h6> This line graph shows the realationship of Risk against Cyber Attack Cases , for the months of <?= $quarter; ?>.
                        As RISK increases , Number of cases increases.
                        
                    </h6>
                </div>
            </div>
        </div>


        <!-- This is the  CHART 3 : columnchart graph -->
        <div class="card shadow mb-4">
            <div class="row">
                <div class="column left">
                    <div id="third_chart" style="width: 650px; height: 200px;"></div>
                </div>
                <br>
                <div class="column right" style="background-color:#27613b;">
                    <h6>This column chart shows the month of Quantity of Cyber attacks for the months of <?= $quarter; ?> 
                The number of cases in Jan is LESS than FEBRUARY
                <br>
                The number of cases in Feb is SAME with Mar
                </h6>
                </div>
            </div>
        </div>
       
        <!-- This is the information box 3 boxes -->
        <div class="card shadow mb-4">
            <div class="row">
                <?php

                foreach ($total2 as $row) {

                ?>
                    <div class="col">
                    <div  style="width: 565px; height: 10px;"></div>
                        <h4> Number of Low risk Cases Detected ? </h4>
                        <h6><?php echo $row['Threat_Level'] ?></h6>
                    </div>
                <?php  } ?>

            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="row">
                <div class="column left">
                    <div id="chart_divs" style="width: 650px; height: 270px;"></div>
                </div>
                <div class="column right" style="background-color:#27613b;">
                    <h6>The area chart here depicts the data for Type of Cyber Attack detected and its frequency for the month of <?= $quarter; ?> We can see that the 
                    <?php
                            foreach ($piechart as $row) {

                                echo " We can see that " . $row['number'] .  " cases of "  . $row['Cyber_Attack_Details'] . ".";
                            } ?>
                </h6>
                </div>
            </div>
        </div>

        <div class="row">
            <<div class="column secondlefty">
                <h4> Affects of not taking action ? </h4>
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
                            <?= $total2[array_search(max(array_column($total2, "number")), array_column($total2, "number"))]["Threat_Level"]; ?>  <?php echo $actiontaken2 ?></h6>
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
<html>