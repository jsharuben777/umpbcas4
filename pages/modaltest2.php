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
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<!-- Button trigger modal -->
  <!-- Button trigger modal -->
  <div class="container">
    <div class="card">
  <h2>Cyber Attack Cases List</h2>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add new Case
</button>
  </div>
  </div>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          
        <h5 class="modal-title" id="exampleModalLabel" >New Cyber Attack Case</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="row">

         <div class="column">
          <div class="form-group">
            <label for="Day">Day</label>
            <input
              type="text"
              class="form-control"
              id="firstname"
              name="firstname"
            />
          </div>
          <div class="form-group">
            <label for="Month">Month</label>
            <input
              type="text"
              class="form-control"
              id="lastname"
              name="lastname"
            />
          </div>
           </div>
     
          <div class="column">
            <div class="form-group">
              <label for="Year">Year</label>
              <input
                type="text"
                class="form-control"
                id="email"
                name="email"
              />
            </div>
            <div class="form-group">
              <label for="Cyber_Attack_Details">Cyber_Attack_Details</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
              />
            </div>
            <div class="form-group">
              <label for="Time">Time</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
              />
            </div>
            <div class="form-group">
              <label for="Status">Status</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
              />
            </div>
            <div class="form-group">
              <label for="Threat Level">Threat Level</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
              />
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
              />
            </div>
           
           </div>
     </div>



        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
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
$sql = "SELECT Day, Month, Year,Cyber_Attack_Details,Time,Status,Threat_Level FROM jan_detectiondata";
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
   
    <td><a class="btn btn-primary" href="http://localhost/umpbcas2/pages/details.php">More Details</a></td>
    
  </tr>	
  <?php
  }
  ?>

</table>











<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>