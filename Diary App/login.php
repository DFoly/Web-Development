<?php

    session_start();
    
    // This is the sign up form php code
    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        
        //connect to db
        $link = mysqli_connect("localhost", "cl22-users-69w", "CgM/3V22D", "cl22-users-69w");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 
        
        if($_POST['email'] == ''){
            echo "<p>Email Address is required</p>";
            
        }else if ($_POST['password'] == ''){
            
            echo "<p>Password is required</p>";
            
        } else { // sign them up, query database to see if email address already exists
            $query = "SELECT `id` FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            
            $result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) > 0){
                
                echo "<p>Email Address already exists</p>";
                
            // add infor to database    
            }else {
                
                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')"; 
                
                if (mysqli_query($link, $query)) {
                    
                    // add to database
                    // recored their session
                   $_SESSION['email'] = $_POST['email'];
                    
                    //redirect to blog entry page
                    //header("Location: session.php");
                    
                } else {
                    
                    echo "<p>There was a problem signing you up - please try again later.</p>";
                
            }
            
            
        }
        
        }
        
    }

?>








<form method = "post">
    <div>
    <input name = "email" type = "text" placeholder = "Enter Email">
    
    <input name = "password" type = "password" placeholder = "Password">
    <input type = "checkbox">
    <button type = "submit">Sign Up</button>
    </div>

    <div>
    <input name = "name1" type = "text" placeholder = "Enter Email">
    
    <input name = "password1" type = "password" placeholder = "Password">
    <input type = "checkbox">
    <button type = "submit">Log In</button>
    </div>

</form>