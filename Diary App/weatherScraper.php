
<?php


    $weather = "";
    $error = "";
    
    if($_GET['city']){
        
        /* $_GET['city'] checks what was put in the form since
            we have attached the name city to the input */
        /* This deals with any spaces in the city name */
        $city = $_GET['city'] = str_replace(' ', '', $_GET['city']);
        
        $file_headers = @get_headers('http://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');
        if ($file_headers[0] == 'HTTP/1.1 404 Not Found'){
            
           $error = "That city could not be found.";
            
        } else{
            
        
        
        $forecastPage = file_get_contents('http://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');
            
        $pageArray = explode('&ndash; 3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);
            
        $secondPageArray = explode('</span></span></span>', $pageArray[1]);
        
        $weather = $secondPageArray[0];
            
        }
        
    }





?>

<!--     $contents = file_get_contents('http://www.weather-forecast.com/locations/'.$city.'forecasts/latest')-->

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

    <title>Weather Scraper</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
    
    <style type = "text/css">
    
        .jumbotron{
            
            height: 100vh;
            text-align: center;
            background-image: url(img2.jpg);
            background-size:cover;
        }
        
        .container{
            
            width:450px;
            padding-top: 100px;
            
        }
        
        #weather{
            
            width = 450px;
            
        }
    
    
    </style>
    
    
    
    
    

  <body>

   <!-- <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">Project name</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </nav> -->
      
      <div class = "jumbotron">
    <div class="container">
        <h1> What's the Weather?</h1>
        <p>Enter the name of a city.</p>
        
        <form>
      <div class = "form-group">
        <input type = "text" name = "city" class = "form-control col-md-3" placeholder="Enter City" value  = "<?php echo  $_GET['city'];?>">
        </div>
          
        <div class = "form-group">
            
            <button type = "submit" class = "btn btn-primary" id = "button">Submit</button>
            </div>
            
            
        </form>
        
            <div id = "weather"><?php
              
              if ($weather){
                  
                  echo '<div class="alert alert-success" role="alert">
                       '.$weather.'</div>';
                  
              }  else if ($error){
                  
                  echo '<div class="alert alert-danger" role="alert">
                       '.$error.'</div>';
                  
              }
              
              ?>
          
          
          
          </div>
        
        
        
      </div>
          

          
        </div><!-- /.container -->

   

      
      
      
      
      
      
      
      
      <script type = "text/javascript">
          
      
          
      
      </script>
      
      
      
      
      
      
      
      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
                
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
                
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  </body>
</html>

