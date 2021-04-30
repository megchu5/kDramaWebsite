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
        <a href="quiz.html">Quiz</a>
        <a href="dramas.html">Dramas</a>
        <a href="actors.html">Actors</a>
        <a onclick = 'surprise()'>Surprise Me!</a>
        <a href="contact.html">Contact Us</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    
<div id = 'login'>
	<form method = "POST">
		<label for = "user">Username</label><br>
		<input type = "text" name = "user" size = "30"><br><br>
		<label for = "pass">Password</label><br>
		<input type = "password" name = "pass" size = "30"><br><br>

        <div id = 'login_buttons' style='margin-bottom: 50px'>
            <input class = "button" style = "width:100px" type = "submit" name = "input" value = "Login" />
            <input class = "button" style = "width:100px" type = "submit" name = "input" value = "Register" />
        </div>
	</form>

	<?php
		$myfile = fopen("logins.txt", "r+") or die("Unable to open file!");
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
				echo 'Please enter a valid username.';
			}
			else if ($_POST['pass'] == "" ){
				echo 'Please enter a valid password.';
			}
			else if (in_array($_POST['user'], $username) && in_array($_POST['pass'], $password)) {
				setcookie("loggedin", "true", time()+(10 * 365 * 24 * 60 * 60), "/");
				header("Location: home.php");
			}
			else {
				echo 'Invalid login.';
			}

		}
		if ($_POST['input'] == "Register") {
			if (in_array($_POST['user'], $username)) {
				echo 'Choose a different username!';
			}
			else if ($_POST['user'] == "" ){
				echo 'Please enter a valid username.';
			}
			else if ($_POST['pass'] == "" ){
				echo 'Please enter a valid password.';
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