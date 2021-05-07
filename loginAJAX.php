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

   if ((mysqli_num_rows($result_1) >= 1) && (isset($_COOKIE["quizLogin"]))) {
       setcookie("loggedin", "true", time()+(10 * 365 * 24 * 60 * 60), "/");
       echo "Accessing quiz...";
   }
   else if ((mysqli_num_rows($result_1) >= 1) && (!isset($_COOKIE["quizLogin"]))) {
       setcookie("loggedin", "true", time()+(10 * 365 * 24 * 60 * 60), "/");
       echo "Logging in...";
   }
   else {
       echo "<p class = 'login_message'><i class='fa fa-exclamation-circle' style = 'font-size: 24px'></i>  Invalid username or password.</p>";
   }

?>