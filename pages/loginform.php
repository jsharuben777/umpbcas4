
<!DOCTYPE html>    
<html>    
<head>    
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <link rel="stylesheet"  href="../styles/loginStyle.css" type="text/css">   

   <!--  This is to connect CSS online for more resources -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
</head>    
<body>   
  
  
            <!-- Page Content -->
            <div style="margin-left:15%">
                <div class="w3-container w3-teal">
                   <!-- <h1> COURT BOOKING SYSTEM</h1> -->

                </div>
            </div>
  <div class="wrapper fadeInDown">
       <div id="formContent">
                <!-- Tabs Titles -->
                <h1>UMP Breach Cyber Attack System</h1>   
    <h5>Hi there Admin ! Login now to acess the System !</h5>
               <!-- Icon -->
          <div class="fadeIn first">
                 <img src="../images/users.png" id="icon" alt="User Icon" />
          </div>

    <!-- Login Form -->
    <form action="loginconnect.php" method="post">
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
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <div class="row">
           
                 
          
          
                  <a class="underlineHover" href="http://localhost/umpbcas2/pages/register.php">I dont't have an account , Register Now </a>
         
      </div>
    </div>
</div>
</div>
</body>   
</html>