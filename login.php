<!DOCTYPE html>
<html lang="en">

<head>
	<title>Soondu Koreaboo Dramas</title>
	<meta charset="UTF-8">
	<meta name="description" content="Phase 3">
	<meta name="author" content="Megan Chu">
	<link href="home.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type = 'text/javascript' src = 'home.js'></script>
</head> 

<body>
    <!-- Header -->
    <div id = 'header'> 
        <a href="home.php"><img id = 'logo' src="logo.png" alt="Logo", width = 100></a>
        <a href="home.php"><h1>Soondu Koreaboo</h1></a>
        <a href="home.php"><h2>Dramas</h2></a>
    </div>
    
<div id = 'content'>
   
    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="home.php">Home</a>
        <a href="quiz.php">Quiz</a>
        <a href="dramas.php">Dramas</a>
        <a href="actors.php">Actors</a>
        <a onclick = 'surprise_1()'>Surprise Me!</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    
<div id = 'login'>
	<form method = "POST">
		<label for = "user">Username</label><br>
		<input class = 'input' type = "text" name = "user" size = "30"><br><br>
		<label for = "pass">Password</label><br>
		<input class = 'input' type = "password" name = "pass" size = "30"><br><br>

        <div id = 'login_buttons' style='margin-bottom: 50px'>
            <input class = "button" type = "submit" name = "input" value = "Login" />
            <input class = "button" type = "submit" name = "input" value = "Register" />
        </div>
	</form>

	<?php

		//error_reporting(E_ALL);
   		//ini_set("display_errors", "on");

		$myfile = fopen("../Phase6/logins.txt", "r") or die("Unable to open file!");
		$username = [];
		$password = [];
		while(!feof($myfile)) {
  			$line = trim(fgets($myfile));
			$splitline = explode(":", $line);
			array_push($username, $splitline[0]);
			array_push($password, $splitline[1]);
		}

		if ($_POST['input'] == "Login") {
			if ($_POST['user'] == "" ){
				echo "<p class = 'login_message'>Please enter a valid username.</p>";
			}
			else if ($_POST['pass'] == "" ){
				echo "<p class = 'login_message'>Please enter a valid password.</p>";
			}
			else if (in_array($_POST['user'], $username) && in_array($_POST['pass'], $password)) {
				setcookie("loggedin", "true", time()+(10 * 365 * 24 * 60 * 60), "/");
				header("Location: home.php");
			}
			else {
				echo "<p class = 'login_message'><i class='fa fa-exclamation-circle' style = 'font-size: 24px'></i>  Incorrect username or password. Please try again.</p>";
			}

		}
		if ($_POST['input'] == "Register") {
			if (in_array($_POST['user'], $username)) {
				echo "<p class = 'login_message'><i class='fa fa-exclamation-circle' style = 'font-size: 24px'></i>  This username has already been taken. Please try again.</p>";
			}
			else if ($_POST['user'] == "" ){
				echo "<p class = 'login_message'>Please enter a valid username.</p>";
			}
			else if ($_POST['pass'] == "" ){
				echo "<p class = 'login_message'>Please enter a valid password.</p>";
			}
			else {
				fwrite($myfile, "\n");
				fwrite($myfile, $_POST['user']);
				fwrite($myfile, ":");
				fwrite($myfile, $_POST['pass']);
				setcookie("loggedin", "true", time()+(10 * 365 * 24 * 60 * 60), "/");
				header("Location: home.php");
			}
		}
		
		fclose($myfile);
		
	?>

    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/19/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>