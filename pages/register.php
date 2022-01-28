
<!DOCTYPE html>    
<html>    
<head>    
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <link rel="stylesheet"  href="../styles/registerStyle.css">   

   <!--  This is to connect CSS online for more resources -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
</head>    
<body>   
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
<h1>UMP Breach Cyber Attack System</h1>   
    <h5>Hi there new Admin ! Register now to acess the System !</h5>
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../images/users.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="registerconnect.php" method="post">
    <div class="row">
         <div class="column">
          <div class="form-group">
            <label for="firstname">First Name</label>
            <input
              type="text"
              class="form-control"
              id="firstname"
              name="firstname"
            />
          </div>
          <div class="form-group">
            <label for="lastname">Last Name</label>
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
              <label for="email">Email</label>
              <input
                type="text"
                class="form-control"
                id="email"
                name="email"
              />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
              />
            </div>
            <input type="submit" class="btn btn-primary" />
           </div>
     </div>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
     
                  <a class="underlineHover" href="http://localhost/umpbcas2/pages/loginform.php">I have an Account , Log in Now </a>
  

       </div>
       </div>
</body>   