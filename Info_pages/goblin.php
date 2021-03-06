<!DOCTYPE html>

<html lang="en">

<head>
	<title>Goblin</title>
	<meta charset="UTF-8">
	<meta name="description" content="Goblin Info Page">
	<meta name="author" content="Laurence Wang">
	<link href="info_pages.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <script type = 'text/javascript' src = '../home.js'></script>
</head> 

<body>
    <!-- Header -->
    <div id = 'header'> 
        <a href="../home.html"><img id = 'logo' src="../logo.png" alt="Logo", width = 100></a>
        <a href="../home.html"><h1>Soondu Koreaboo</h1></a>
        <a href="../home.html"><h2>Dramas</h2></a>
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Goblin &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/8AcNEVUzV4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Kim Shin, a military general, is executed as a traitor and is cursed to live forever as punishment for all of the soldiers he killed, forced to watch his loved ones die while he cannot. However, the Goblin's bride is able to take away his curse.

        <h3>Where to Watch</h3>
        Only on <a href="https://www.viki.com/tv/31706c-guardian-the-lonely-and-great-god">Viki</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/gongyoo.png" alt="Gong Yoo">
            <figcaption>Gong Yoo as Kim Shin</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimgoeun.png" alt="Kim Go-eun">
            <figcaption>Kim Go-eun as Ji Eun-tak</figcaption>
        </figure>

	<figure>
            <img src="Actor_pics/leedongwook.jpg" alt="Lee Dong-wook">
            <figcaption>Lee Dong-wook as Wang Yeo</figcaption>
        </figure>

	<figure>
            <img src="Actor_pics/yooinna.png" alt="Yoo In-na">
            <figcaption>Yoo In-na as Sunny/Kim Sun</figcaption>
        </figure>

	<figure>
            <img src="Actor_pics/yooksungjae.jpg" alt="Yook Sung-jae">
            <figcaption>Yook Sung-jae as Yoo Deok-hwa</figcaption>
        </figure>

    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/5/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>