<!DOCTYPE html>

<html lang="en">

<head>
	<title>Soondu Koreaboo Dramas</title>
	<meta charset="UTF-8">
	<meta name="description" content="Empty page for links">
	<meta name="author" content="Jennifer Tang">
	<link href="actors_page.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <script type = 'text/javascript' src = 'home.js'></script>
</head> 

<script>
    function ajax_display() {
            ajaxRequest = new XMLHttpRequest();

            ajaxRequest.onreadystatechange = function() {
                if (ajaxRequest.readyState == 4) {
                    ajaxDisplay = document.getElementById('results');
                    ajaxDisplay.innerHTML = ajaxRequest.responseText;
                }
            }

            // Now get the value from user and pass it to server script.
			last = (document.getElementById('lastName').value).trim();
            first = (document.getElementById('firstName').value).trim();
            drama = (document.getElementById('dramaTitle').value).trim();
            queryString = "?last=" + last;

            queryString += "&first=" + first + "&drama=" + drama;
            
            ajaxRequest.open("GET", "actor_search.php" + queryString, true);
            ajaxRequest.send(null);
    }

    function reset_search() {
        document.getElementById('lastName').value = "";
        document.getElementById('firstName').value = "";
        document.getElementById('dramaTitle').value = "";
        ajax_display();
    }
</script>

<body onload="ajax_display()">
    <!-- Header -->
    <div id = 'header'> 
        <a href="home.html"><img id = 'logo' src="logo.png" alt="Logo", width = 100>
        <h1>Soondu Koreaboo</h1>
        <h2>Dramas</h2></a>
    </div>
    
<div id = 'content'>
   
    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home.php">Home</a>
        <?php
            if (!isset($_COOKIE["loggedin"])) {
                echo "<a href = 'login.php'>Login/Register</a>";
            } else {
                echo "<form method='POST' action='home.php'>";
                echo "<input class = 'logout' type='submit' name = 'logout' value = 'Logout'>";
                echo "</form>";
            }
	    ?>  
        <a href="quiz.html">Quiz</a>
        <a href="dramas.php">Dramas</a>
        <a onclick = 'surprise_1()'>Surprise Me!</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    
    <!-- Description -->    
    <h2>Actors</h2>
    
    <div id = 'description' style = 'text-align: center;'>
        <span style="font-weight:bold;font-size:18px">Hover over each actor's picture to see what dramas they have been in.</span>    
    </div>

    <div id = 'search_table'>
    <form method="POST" action="actors.php">
        <table style="text-align:center;margin-left:auto;margin-right:auto;border:1px solid white">
            <tr><td><label>Last Name: <input type="text" size="15" id="lastName"></label></td> 
            <td><label>First Name: <input type="text" size="15" id="firstName"></label></td> 
            <td><label>Drama: <input type="text" size="15" id="dramaTitle"></label></td></tr>
            <tr><td colspan=3><input class = "button" type="button" name="search_button" value="Search" onclick="ajax_display()">
            <input class = "button" type="button" value="Reset" onclick="reset_search()"></td></tr>
        </table>
    </form>
    </div>

    <div id='results'></div>
    
    <footer>
        <hr style="color:#333;border-top:1px;">
        <h11>Last Updated: 4/30/2021 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>