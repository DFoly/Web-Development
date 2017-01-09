<?php


//include("login.php");
// Generate a hash of the password "mypassword"
//$hash = password_hash("mypassword", PASSWORD_DEFAULT);
 




?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
      
      
          <title>Secret Diary</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
      
      
      
      
      <style type = "text/css">
      
          .jumbotron {
              
              background:url('img.jpg');
              background-size:cover;
              height: 100vh;
              text-align: center;           
              
          }
          
          .container{
              
              color: white;
              margin 0 auto;
              text-align: center;
              
          }
          
          .form-group{
              
              margin 0 auto;
              text-align: center;
              
              
          }
      
      
      
      </style>
      
      
      
      
      
  </head>
    
    
    <body>
        
        <div class = "jumbotron">
        <div class = "container">
        <h1>Secret Diary</h1>
        <h4>Store your thoughts permanently and securely.</h4>
        <p>Interested? Sign up now.</p>
            
            <form method = "post">
               <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  stay logged in
                </label>
                </div>

            <button type = "submit" class = "btn btn-primary">Sign Up</button>
            <button type = "submit" class = "btn btn-success">Log In</button>
            </form>
            
            
            
        </div>
            
        
        
        
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
                
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
                
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  </body>
</html>