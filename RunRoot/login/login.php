<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user_1
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();

   
    
    if ($user) {
        
        if(password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {

  font-family: Arial, Helvetica, sans-serif;
    background: url(./pozadi.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

* {
  box-sizing: border-box;
}

.container {

  padding: 16px;
  background-color: white;
  border-radius: 5px;
  width: 50%;
  margin: 0 auto;
  margin-top: 10rem;
  background-color: rgba(193, 205, 247, 0.877);
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  border-radius: .5rem;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #171070;
  text-transform: uppercase;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 1rem;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}
.signin {
  background-color: rgba(193, 205, 247, 0.877);
  margin-top: 20px;
  text-align: center;
  opacity: 0,7; 
}



</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Sign up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <hr>

    <button type="submit" class="registerbtn">Sign up</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account?<a href="sign in.html">Log in</a>.</p>
  </div>
</form>

</body>
</html>








