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
     
<!-- Content for modal form -->
<form action="apr_detectionadd.php" method="POST">
        
<div class="form-group">
            <label for="dataid">Data ID</label>
            <input
              type="integer"
              class="form-control"
              id="dataid"
              name="dataid"
            />
          </div>
          <div class="form-group">
            <label for="Day">Day</label>
            <input
              type="text"
              class="form-control"
              id="Day"
              name="Day"
            />
          </div>

          <div class="form-group">
            <label for="Month">Month</label>
            <input
              type="text"
              class="form-control"
              id="Month"
              name="Month"
            />
          </div>
           
            <div class="form-group">
              <label for="Year">Year</label>
              <input
                type="text"
                class="form-control"
                id="Year"
                name="Year"
              />
            </div>
            <div class="form-group">
              <label for="Cyber_Attack_Details">Cyber_Attack_Details</label>
              <input
                type="text"
                class="form-control"
                id="Cyber_Attack_Details"
                name="Cyber_Attack_Details"
              />
            </div>
            <div class="form-group">
              <label for="Time">Time</label>
              <input
                type="text"
                class="form-control"
                id="Time"
                name="Time"
              />
            </div>
            <div class="form-group">
              <label for="Status">Status</label>
              <input
                type="text"
                class="form-control"
                id="Status"
                name="Status"
              />
            </div>
            <div class="form-group">
              <label for="Threat_Level">Threat Level</label>
              <input
                type="text"
                class="form-control"
                id="Threat_Level"
                name="Threat_Level"
              />
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <input
                type="text"
                class="form-control"
                id="Description"
                name="Description"
              />
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

</div>
<!-- ################################################################################################################################### -->
<!-- Button trigger modal -->

<!-- MORE DETAILS Modal -->
<div class="modal fade" id="moredetailsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">More Details about Cyber Attack Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
<!-- Content for modal form -->
<form action="apr_detectionadd.php" method="POST">
        
         
          <div class="form-group">
            <label for="Day">Day</label>
            <input
              type="text"
              class="form-control"
              id="Day"
              name="Day"
            />
          </div>

          <div class="form-group">
            <label for="Month">Month</label>
            <input
              type="text"
              class="form-control"
              id="Month"
              name="Month"
            />
          </div>
           
            <div class="form-group">
              <label for="Year">Year</label>
              <input
                type="text"
                class="form-control"
                id="Year"
                name="Year"
              />
            </div>
            <div class="form-group">
              <label for="Cyber_Attack_Details">Cyber_Attack_Details</label>
              <input
                type="text"
                class="form-control"
                id="Cyber_Attack_Details"
                name="Cyber_Attack_Details"
              />
            </div>
            <div class="form-group">
              <label for="Time">Time</label>
              <input
                type="text"
                class="form-control"
                id="Time"
                name="Time"
              />
            </div>
            <div class="form-group">
              <label for="Status">Status</label>
              <input
                type="text"
                class="form-control"
                id="Status"
                name="Status"
              />
            </div>
            <div class="form-group">
              <label for="Threat_Level">Threat Level</label>
              <input
                type="text"
                class="form-control"
                id="Threat_Level"
                name="Threat_Level"
              />
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <input
                type="text"
                class="form-control"
                id="Description"
                name="Description"
              />
            </div>
           
           </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        
      </div>
     
      </form>


      </div>
     
    </div>
  </div>

<!-- ################################################################################################################################### -->
<!-- Button trigger modal -->

<!-- EDIT Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Details about Cyber Attack Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
<!-- Content for modal form -->
<form action="addcyberattackdetection.php" method="POST">
        
         
          <div class="form-group">
            <label for="Day">Day</label>
            <input
              type="text"
              class="form-control"
              id="Day"
              name="Day"
              placeholder="<?php echo $row ['dataid']?>"
            />
          </div>

          <div class="form-group">
            <label for="Month">Month</label>
            <input
              type="text"
              class="form-control"
              id="Month"
              name="Month"
              placeholder="month OLD data from db"
            />
          </div>
           
            <div class="form-group">
              <label for="Year">Year</label>
              <input
                type="text"
                class="form-control"
                id="Year"
                name="Year"
                placeholder="year OLD data from db"
              />
            </div>
            <div class="form-group">
              <label for="Cyber_Attack_Details">Cyber_Attack_Details</label>
              <input
                type="text"
                class="form-control"
                id="Cyber_Attack_Details"
                name="Cyber_Attack_Details"
                placeholder="details OLD data from db"
              />
            </div>
            <div class="form-group">
              <label for="Time">Time</label>
              <input
                type="text"
                class="form-control"
                id="Time"
                name="Time"
                placeholder="time OLD data from db"
              />
            </div>
            <div class="form-group">
              <label for="Status">Status</label>
              <input
                type="text"
                class="form-control"
                id="Status"
                name="Status"
                placeholder="status OLD data from db"
              />
            </div>
            <div class="form-group">
              <label for="Threat_Level">Threat Level</label>
              <input
                type="text"
                class="form-control"
                id="Threat_Level"
                name="Threat_Level"
                placeholder="threatlevel OLD data from db"
              />
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <input
                type="text"
                class="form-control"
                id="Description"
                name="Description"
                placeholder="description OLD data from db"
              />
            </div>
           
           </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        
      </div>
     
      </form>


      </div>
     
    </div>
  </div>




<!-- This is the Cyber Attack Table JAN -Q1 ------------------------------------------------------------------------------------------------------------------------------->


<thead class="thead-light">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "umpbcas2";
$sql = "SELECT * FROM apr_detectiondata ORDER BY Day ";
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
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    
    <?php
  while($row = mysqli_fetch_assoc($result)) {
   
    ?>
    
    <tr>
    <td><?php echo $row['dataid']; ?></td>
    <td><?php echo $row['Day']; ?></td>
    <td><?php echo $row['Month']; ?></td>
    <td><?php echo $row['Year']; ?></td>
    <td><?php echo $row['Cyber_Attack_Details']; ?></td>
    <td><?php echo $row['Time']; ?></td>
    <td><?php echo $row['Status']; ?></td>
    <td><?php echo $row['Threat_Level']; ?></td>
   
    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#moredetailsmodal">More Details</button> </td>
    <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editmodal">EDIT</button> </td>
    <td><a class="btn btn-danger" href="cyberattackdetection.php?delete=<?php echo $row['dataid']; ?>">DELETE</a></td>
    
  </tr>	
  <?php
  }
  ?>

<!-- This is the Cyber Attack Table FEB -Q1 ------------------------------------------------------------------------------------------------------------------------------->



<!-- This is the Cyber Attack Table MAR -Q1 ------------------------------------------------------------------------------------------------------------------------------->



<!-- This is the Cyber Attack Table APR -Q1 ------------------------------------------------------------------------------------------------------------------------------------>


</table>











<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>