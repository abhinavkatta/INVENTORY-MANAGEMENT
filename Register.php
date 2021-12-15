<?php
 include 'connect.php';
 error_reporting(0);        
?>

<!DOCTYPE html>
<html>
    <head>
    <title> IMS sign-in </title >
    <link rel="stylesheet" type="text/css" href="css/styling.css">
    </head>

 <body class="container3">
 
              <form action="login_page.php" method="$_POST">
              <div class="bar"> 
        <p> ~~ Welcome to IMS ~~ </p>
               </div>
               <div class="back">
                      <div class="signin_input">
                        <label>First Name:</label>
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="signin_input">
                        <label>Last Name:</label>
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="signin_input">
                        <label>Username:</label>
                          <input type="email" placeholder="Username" >
                      </div>
                    <div class="signin_input">
                      <label>Password:</label>
                        <input type="Password" placeholder="Password" >
                    </div>
                    
                      <div class="signin_input">
                        <button> Submit</button>
                        <p class='sign'> <a href="login_page.php">Back to login page</a></p>
                    </div>
                  </from>
               </div>  
              </div>
</body>  
</html>
 