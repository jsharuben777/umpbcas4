<?php
   $content = 'This is about us page content';
   include('master.php');
   include('config.php');
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet"  href="../styles/testingStyles.css">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "umpbcas2";
$sql = "SELECT Cyber_Attack_Details, count(*) as number FROM jan_detectiondata GROUP BY Cyber_Attack_Details" ;
$conn = mysqli_connect($servername,$username,$password,$dbname);
$result = mysqli_query($conn, $sql);

?>
     <!-- CHART 1 : This is piechart -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Cyber_Attack_Details', 'Number'],
          <?php
              while($row=mysqli_fetch_array($result)){
                  echo "['".$row["Cyber_Attack_Details"]."', ".$row["number"]."],";

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
      $sql = "SELECT Cyber_Attack_Details, count(*) as number FROM jan_detectiondata GROUP BY Cyber_Attack_Details" ;
    ?>
      </script>
      <!-- CHART 2 : This is BARCHART Graph -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Age', 'Weight'],
          [ 15,      12],
          [ 4,      5.5],
          [ 11,     14],
          [ 4,      5],
          [ 3,      3.5],
          [ 6.5,    7]
        ]);

        var options = {
          title: 'Age vs. Weight comparison',
          hAxis: {title: 'Age', minValue: 0, maxValue: 15},
          vAxis: {title: 'Weight', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>

     

<!-- CHART 3 :This is Column Chart -->
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          
        //   <?php
        //   if(mysqli_num_rows($result)>0){
        //       while($row= mysqli_fetch_array($result)){
        //           echo "['".$excel->sheetName($sheet)."', '".$row['']."', '".$row['']."', '".$row['']."', '"
        //       }
        //   }
        //   ?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


<!-- CHART 4 : This is Line Graph -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>


<!-- CHART 5 : Area Chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_divs'));
        chart.draw(data, options);
      }
    </script>

      <body>

      <div class = "row">
          <div class = "col-10">
<h1 >Cyber Attack Data Report</h1> 
<!-- <button onclick="window.print()">
<a href="#" class="d-none d-sm-inline-block btn  btn-warning shadow-sm"><i class="fas fa-download fa-sm text-white-150"></i> Generate Report</a>
                    </div></button> -->
    </div>
                    <div class = "col-2">
                    <button onclick="window.print()" class="btn btn-primary float-end" >Generate Report</button>
                    
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Cyber Attack month </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">August</div>
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
                                                Number of Cyber Attacks</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">225</div>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">225</div>
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
                                                Number of Cyber Attacks</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">225</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <!-- This is the piechart -->
    <div class="card shadow mb-4">
<div class="row">
      <div class="column left">
          <div id="piechart" style="width: 660px; height: 260px;" style="background-color:#ccc;"></div>
      </div>
      <div class="column right" style="background-color:#27613b;">
         <h6>Something is happening here that seems not being able to make this part of the column to pan to the right ,wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww which is aesthetically more pleasing to me la</h6>
      </div>
</div>
    </div>

     <!-- This is the scatterplot graph -->
     
     <div class="card shadow mb-4">
<div class="row">
      <div class="column left">
      <div id="chart_div" style="width: 650px; height: 250px;" class="charts"></div>
      </div>
      <div class="column right" style="background-color:#27613b;">
         
      <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, sequi? Quidem reprehenderit, voluptatem 
          voluptates laborum dicta velit facilis, accusamus alias perspiciatis assumenda laboriosam vero fugiat voluptatibus amet aliquam illo itaque?</h6>
      </div>
</div>
    </div>
 

       <!-- This is the columnchart graph -->
       <div class="card shadow mb-4">
<div class="row">
      <div class="column left">
      <div id="columnchart_material" style="width: 650px; height: 250px;"></div>
      </div>
      <div class="column right" style="background-color:#27613b;">
          <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, sequi? Quidem reprehenderit, voluptatem 
              voluptates laborum dicta velit facilis, accusamus alias perspiciatis assumenda laboriosam vero fugiat voluptatibus amet aliquam illo itaque?</h6>
      </div>
</div>
    </div>
<!-- This is the line graph -->
    <div class="card shadow mb-4">
<div class="row">
      <div class="column left">
    <div id="curve_chart" style="width: 650px; height: 250px"></div>
    </div>
      <div class="column right" style="background-color:#27613b;">
          <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, sequi? Quidem reprehenderit, voluptatem 
              voluptates laborum dicta velit facilis, accusamus alias perspiciatis assumenda laboriosam vero fugiat voluptatibus amet aliquam illo itaque?</h6>
      </div>
</div>
    </div>
<!-- This is the information box 3 boxes -->
    <div class="card shadow mb-4">
<div class="row">
      <<div class="column lefty">
          <h4> Affects of not taking action ? </h4>
          <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, sequi? Quidem reprehenderit, voluptatem voluptates laborum dicta velit facilis, accusamus alias perspiciatis assumenda laboriosam vero fugiat voluptatibus amet aliquam illo itaque?</h6>
      </div>
      <div class="column middy">
      <h4> What actions can be taken ? </h4>
          <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, sequi? Quidem reprehenderit, voluptatem voluptates laborum dicta velit facilis, accusamus alias perspiciatis assumenda laboriosam vero fugiat voluptatibus amet aliquam illo itaque?</h6>
      </div>
      <div class="column righty">
      <h4> Cost estimation </h4>
          <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, sequi? Quidem reprehenderit, voluptatem voluptates laborum dicta velit facilis, accusamus alias perspiciatis assumenda laboriosam vero fugiat voluptatibus amet aliquam illo itaque?</h6>
      </div>
</div>
    </div>

    <div class="card shadow mb-4">
<div class="row">
      <div class="column left">
      <div id="chart_divs" style="width: 650px; height: 250px;"></div>
    </div>
      <div class="column right" style="background-color:#27613b;">
          <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, sequi? Quidem reprehenderit, voluptatem voluptates laborum dicta velit facilis, accusamus alias perspiciatis assumenda laboriosam vero fugiat voluptatibus amet aliquam illo itaque?</h6>
      </div>
</div>
    </div>

    <div class="row">
      <<div class="column secondlefty">
          <h4> Affects of not taking action ? </h4>
          <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, sequi? Quidem reprehenderit, voluptatem voluptates laborum dicta velit facilis, accusamus alias perspiciatis assumenda laboriosam vero fugiat voluptatibus amet aliquam illo itaque?</h6>
      </div>
      
      <div class="column secondrighty">
      <h4> Cost estimation </h4>
          <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, sequi? Quidem reprehenderit, voluptatem voluptates laborum dicta velit facilis, accusamus alias perspiciatis assumenda laboriosam vero fugiat voluptatibus amet aliquam illo itaque?</h6>
      </div>
</div>
    </div>






<br>
<div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-7 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="m-0 font-weight-bold text-primary">August Cyber Attack Overview</h5>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="m-0 font-weight-bold text-primary">Revenue Sources</h5>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">

<br>
<br>
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                               Suggestion based on Report Analysis</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Based on the report , for the month of -- the action to be take if the severity is --- that is to ----------</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">

<!-- Illustrations -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Report handled by</h5>
    </div>
    
    <div class="card-body">
        <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                src="../images/users.png" alt="User picture">
                
                <h5>
                <br>
                Administrator First Name :
                <br>
                Administrator Last Name  :
                <br>
                Administrator E-mail  :
                <br>
    </h5>
            

    </div>
    </div>
</div>

<!-- Approach -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Cyber Attack Severity</h5>
    </div>
    <div class="card-body">
        <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
            CSS bloat and poor page performance. Custom CSS classes are used to create
            custom components and custom utility classes.</p>
        <p class="mb-0">Before working with this theme, you should become familiar with the
            Bootstrap framework, especially the utility classes.</p>
    </div>
</div>

</div>
</div>

</div>
<!-- /.container-fluid -->

</div>



</body>
<html>