<!DOCTYPE html>
<html>
    
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet"  href="style.css"> 


  <title> Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

  <link href="app.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

 <body class="bg-white">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/umpbcas2/pages/homepage.php">UMPBCAS</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="http://localhost/umpbcas2/pages/managecyberattackdata.php">Manage Cyber Attack Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="http://localhost/umpbcas2/pages/cyberattackdetection.php">Cyber Attack Detention Info</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/umpbcas2/pages/cyberattackanalytics.php">Cyber Attack Analytics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/umpbcas2/pages/notificationalert.php" >Notification Alert</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/logoutpage">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- NAVIGATION BAR =======================================================================================================================================
-->  
<body>
<div class = "row">
          <div class = "col-10">
    
     <h2>Cyber Attack Detection Data : $dbname</h2>
</div>

<div class = "col-2">
     <!-- Button trigger modal -->
     <br>
   
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Add Cyber Attack Data
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Cyber Attack Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">


      <!-- this is the modal-form -->
      <form action ="cyberattackdetection.php" method= "POST"> 
    
              <div class="mb-2">
              <label for="date">Date</label>
            <input
              type="text"
              class="form-control"
              id="date"
              name="date"
            />
              </div>



              <div class="mb-3">
              <label for="cyberattackdetails">Cyber Attack Details</label>
            <input
              type="text"
              class="form-control"
              id="cyberattackdetails"
              name="cyberattackdetails"
            />
            </div>

            <div class="mb-2">
              <label for="time">Time</label>
            <input
              type="text"
              class="form-control"
              id="time"
              name="time"
            />
              </div>


              
              <div class="mb-3">
              <label for="status">Status</label>
            <input
              type="text"
              class="form-control"
              id="status"
              name="status"
            />
            </div>

            <div class="mb-2">
              <label for="threatlevel">Threat Level</label>
            <input
              type="text"
              class="form-control"
              id="threatlevel"
              name="threatlevel"
            />
              </div>

        <!-- <label for="exampleFormControlInput1" class="form-label">Date :</label>
         <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="Cyber Attack date here">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cyber attack details :</label>
         <input name="cyberattackdetails" class="form-control" id="exampleFormControlInput1" placeholder="Type of Cyber Attack  here">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Time :</label>
         <input type="time" name="time" class="form-control" id="exampleFormControlInput1" placeholder="Type of Cyber Attack  here">
      </div>

      <div class="mb-3">
      <label for="floatingTextarea2">Status :</label>
      <div class="form-floating">
      <input type="textarea" name ="status" class="form-control" placeholder="Cyber Attack Status here" id="floatingTextarea2" style="height: 100px"></input> -->
     
     </div>
      </div>

      <div class="mb-3">
      <label for="floatingTextarea2">Threat Level :</label>
      <select name="threatlevel" class="form-select form-select-sm" aria-label="Gender">
       <option selected>Threat Level</option>
       <option value="Low">Low</option>
       <option value="Medium">Medium</option>
       <option value="High">High</option>
      </select>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        
      </div>
     
      </form>


      </div>
     
    </div>
  </div>
</div>
</div>


<!-- This is the Cyber Attack Table -->


<thead class="thead-light">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "umpbcas2";
$sql = "SELECT Day, Month, Year,Cyber_Attack_Details,Time,Status,Threat_Level,Description FROM jan_detectiondata";
$conn = mysqli_connect($servername,$username,$password,$dbname);
$result = mysqli_query($conn, $sql);

?>
<table class ="table table-hover">

  <tr>
      <th scope="col">No.</th>
      <th scope="col">Day</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Cyber Attack Details</th>
      <th scope="col">Time</th>
      <th scope="col">Status</th>
      <th scope="col">Threat Level</th>
      <th scope="col">Description</th>
      <th scope="col">Operation</th>
    </tr>
    <?php
  while($row = mysqli_fetch_assoc($result)) {
   
    ?>
    
    <tr>
    <td><?php echo "['']"; ?></td>
    <td><?php echo $row['Day']; ?></td>
    <td><?php echo $row['Month']; ?></td>
    <td><?php echo $row['Year']; ?></td>
    <td><?php echo $row['Cyber_Attack_Details']; ?></td>
    <td><?php echo $row['Time']; ?></td>
    <td><?php echo $row['Status']; ?></td>
    <td><?php echo $row['Threat_Level']; ?></td>
    <td><?php echo $row['Description']; ?></td>
    <td><a class="btn btn-primary" href="http://localhost/umpbcas2/pages/details.php">View Details</a></td>
    
  </tr>	
  <?php
  }
  ?>

</table>





</body>
</html>