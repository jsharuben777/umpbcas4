<!DOCTYPE html>
<html>
    
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet"  href="style.css"> 


    <title>UMPBCAS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

  <link href="app.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

 <body class="bg-white">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/umpbcas2/pages/homepage.php" class="nav-link active">UMPBCAS</a>
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
          <a class="nav-link active" href="http://localhost/umpbcas2/pages/managecyberattackdata.php">Manage Cyber Attack Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="http://localhost/umpbcas2/pages/selectdetection.php">Cyber Attack Detention Info</a>
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
<!-- NAVIGATION BAR ======================================================================================================================================= (YEARLY DIFFERENCES IN TERMS OF ANALYTICS) CASES
-->  
<h2>Manage Cyber Attack Data</h2>
<div class="col-sm">
          <div class="card border-secondary mb-3" >
            
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Quarter</th>
      <th scope="col">Last recorded</th>
      <th scope="col">Number of Attacks Detected</th>
      <th scope="col">Upload</th>
      <th scope="col">Download</th>
      
    </tr>
  </thead>






  <tbody>
  <form action="excelconnect.php" methoD="post" enctype="multipart/form-data">
    <tr>
      <th scope="row">1</th>
      <td>Q1 ( JAN , FEB , MAR )</td>
      <td>31/08/2021</td>
      <td>-</td>
      <td>
        <button>
           <label class="form-label" for="customFile">Upload Spreadsheet data </label>
           <input type="file" class="form-control" name="excelfile" />
           <input type="submit" name="excelsubmit">
        </button>
      </td>
      <td><button>DOWNLOAD</button></td>
     
    </tr>
</form>










<form action="excelconnect.php" methoD="post" enctype="multipart/form-data">
    <tr>
      <th scope="row">2</th>
      <td>Q2 ( APR , MAY , JUN )</td>
      <td>30/09/2021</td>
      <td>    -</td>
      <td><button>
           <label class="form-label" for="customFile">Upload Spreadsheet data </label>
           <input type="file" class="form-control" name="excelfile" />
           <input type="submit" name="excelsubmit">
        </button></td>
      <td><button>DOWNLOAD</button></td>
      
    </tr>
    </form>

    <tr>
      <th scope="row">3</th>
      <td>Q3 ( JULY , AUG , SEPT )</td>
      <td>31/10/2021</td>
      <td>-</td>
      <td><button>
           <label class="form-label" for="customFile">Upload Spreadsheet data </label>
           <input type="file" class="form-control" name="excelfile" />
           <input type="submit" name="excelsubmit">
        </button></td>
      <td><button>DOWNLOAD</button></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Q4 ( OCT , NOV , DEC )</td>
      <td>30/11/2021</td>
      <td>-</td>
     <td><button>
           <label class="form-label" for="customFile">Upload Spreadsheet data </label>
           <input type="file" class="form-control" name="excelfile" />
           <input type="submit" name="excelsubmit">
        </button></td>
      <td><button>DOWNLOAD</button></td>
      
    </tr>
    
  </tbody>
</table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
