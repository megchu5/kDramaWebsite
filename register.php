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

	<script language = "javascript" type = "text/javascript">

    //Browser Support Code
        function ajaxFunction(server,user,pwd,dbName){
        var ajaxRequest;  // The variable that makes Ajax possible!
        
        ajaxRequest = new XMLHttpRequest();
        
        // Create a function that will receive data sent from the server and will update
        // the div section in the same page.
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4){
                var ajaxDisplay = document.getElementById('ajaxDiv');
				if (ajaxRequest.responseText == 'Registering...') {
					window.location = "home.php";
				}
                else if (ajaxRequest.responseText == 'Accessing quiz...') {
                    window.location = "quiz.php";
                }
				else {
					ajaxDisplay.innerHTML = ajaxRequest.responseText;
				}
            }
        }
        
        // Now get the value from user and pass it to server script.
                
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var queryString = "?username=" + username ;
        
        queryString +=  "&password=" + password + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;
        
        ajaxRequest.open("GET", "registerAJAX.php" + queryString, true);
        ajaxRequest.send(null);
        }
    </script>

<div id = 'login'>
        <form method="POST" name = "myForm">
            <?php

                $server = 'spring-2021.cs.utexas.edu';
                $user = "cs329e_bulko_jentang";
                $pwd = 'Memo=munich$Stray';
                $dbName = "cs329e_bulko_jentang";
            
                echo "<h2>Welcome to Soondu Koreaboo Dramas!</h2>";
                echo "<h5>Please enter a username and password below</h5>";
                echo "<label>Username</label><br>";
                echo "<input class = 'input' type = 'text' id = 'username' size = '30'><br><br>";
                echo "<label>Password</label><br>";
                echo "<input class = 'input' type = 'password' id = 'password' size = '30'><br><br>";
                echo "<div id = 'login_buttons' style='margin-bottom: 50px'>";
                    echo "<input class='button' type = \"button\" onclick = \"ajaxFunction('$server','$user','$pwd','$dbName')\" value = \"Register\"/><br><br> ";
				echo "<div id = 'ajaxDiv'></div>";
				echo "<p id = 'messages'>Already have an account? <a href = 'login.php'>Log in here!</a>";
                
            ?>
        </form>
    </div>


    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/19/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</body>
</html>