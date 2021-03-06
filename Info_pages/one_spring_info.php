<!DOCTYPE html>

<html lang="en">

<head>
	<title>One Spring Night</title>
	<meta charset="UTF-8">
	<meta name="description" content="One Spring Night Info Page">
	<meta name="author" content="Jennifer Tang">
	<link href="info_pages.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <script type = 'text/javascript' src = '../home.js'></script>
</head> 

<body>
    <!-- Header -->
    <div id = 'header'> 
        <a href="../home.html"><img id = 'logo' src="../logo.png" alt="Logo", width = 100>
        <h1>Soondu Koreaboo</h1>
        <h2>Dramas</h2></a>
    </div>
    
<div id = 'content'>
   
    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../home.php">Home</a>
        <?php
            if (!isset($_COOKIE["loggedin"])) {
                echo "<a href = '../login.php'>Login/Register</a>";
            } else {
                echo "<form method='POST' action='../home.php'>";
                echo "<input class = 'logout' type='submit' name = 'logout' value = 'Logout'>";
                echo "</form>";
            }
        ?>
        <a href="../quiz.php">Quiz</a>
        <a href="../dramas.php">Dramas</a>
        <a href="../actors.php">Actors</a>
        <a onclick = 'surprise()'>Surprise Me!</a>
        <a href="../contact.php">Contact Us</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    
    <!-- Body -->
    
    <div id = 'left_body'>
        <p style="font-size:50px; font-weight:bold; margin:10px">One Spring Night &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/vGFu49VSoUQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Lee Jeongin, a librarian, first meets single dad and pharmacist Yoo Jiho one morning as she visits his pharmacy for a hangover. Jiho becomes romantically interested in Jeongin after their first encounter, and he expresses his interest through text. Jeongin, who is stuck in a loveless long-term relationship, struggles against her partner's parents who have been pressuring her to get married. As the tension builds between Jeongin and Jiho, Jeongin realizes that she cannot marry her long-term partner, Kwon Giseok. Meanwhile, the pair struggle against social pressures and stigma aimed at single parents, like Jiho. 

        <h3>Where to Watch</h3>
        Only on <a href="https://www.netflix.com/title/81094069?source=35">Netflix</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/hanjimin.jpg" alt="Han Jimin">
            <figcaption>Han Jimin as Lee Jeongin</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/junghaein.jpg" alt="Jung Haein">
            <figcaption>Jung Haein as Yoo Jiho</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimjunhan.jpg" alt="Kim Junhan">
            <figcaption>Kim Junhan as Kwon Giseok</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/31/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>