<?php

   //error_reporting(E_ALL);
   //ini_set("display_errors", "on");
   
   $server = 'spring-2021.cs.utexas.edu';
   $user = "cs329e_bulko_jentang";
   $pwd = 'Memo=munich$Stray';
   $dbName = "cs329e_bulko_jentang";

   // Connect to MySQL Server

   $mysqli = new mysqli($server, $user, $pwd, $dbName);

   if ($mysqli->connect_errno) {
      die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
   }
  
   //Select Database
   $mysqli->select_db($dbName) or die($mysqli->error);
   
   // Retrieve data from Query String
   $username = $_GET['username'];
   $password = $_GET['password'];
   
   // Escape User Input to help prevent SQL Injection
   $username = $mysqli->real_escape_string($username);
   $password = $mysqli->real_escape_string($password);

   //Building query
   $query = "SELECT username FROM logins WHERE username='$username'";
   $result = $mysqli->query($query) or die($mysqli->error);

   $query_1 = "SELECT * FROM logins WHERE username='$username' AND password='$password';";
   $result_1 = $mysqli->query($query_1) or die($mysqli->error);

   if (mysqli_num_rows($result) == 0) {
       if (strlen($password) < 6 || strlen($password) > 10) {
           echo "<p class = 'login_message'><i class='fa fa-exclamation-circle' style = 'font-size: 24px'></i>  Your password must be between 6 and 10 characters long.</p>";
       }
       else if (checkChars($password) != 1 || checkLower($password) != 1 || checkUpper($password) != 1 || checkNumber($password) != 1) {
           echo "<p class = 'login_message'><i class='fa fa-exclamation-circle' style = 'font-size: 24px'></i>  Your password must have at least one lower case letter, at least one upper case, and at least one number.</p>";
        }
       else {
           $query_2 = "INSERT INTO logins (username, password) VALUES ('$username', '$password');";
           $result_2 = $mysqli->query($query_2) or die($mysqli->error);
           setcookie("loggedin", "true", time()+(10 * 365 * 24 * 60 * 60), "/");
           if (isset($_COOKIE["quizLogin"])) {
               echo "Accessing quiz...";
           }
           else {
               echo "Registering...";
           }
       }
   }
   else if (mysqli_num_rows($result) == 1) {
       echo "<p class = 'login_message'><i class='fa fa-exclamation-circle' style = 'font-size: 24px'></i>  This username has already been taken. Please try again.</p>";
   }
   
   function checkChars($pass) {
       return (preg_match(("/^[0-9a-zA-Z]+$/"), $pass)) == 1;
   }

   function checkLower($pass) {
       return (preg_match(("/[a-z]/"), $pass)) == 1;
   }

   function checkUpper($pass) {
       return (preg_match(("/[A-Z]/"), $pass)) == 1;
   }

   function checkNumber($pass) {
       return (preg_match(("/[0-9]/"), $pass)) == 1;
   }


?>