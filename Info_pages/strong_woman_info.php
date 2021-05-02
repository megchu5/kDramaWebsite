<!DOCTYPE html>

<html lang="en">

<head>
	<title>Strong Woman Do Bong Soon</title>
	<meta charset="UTF-8">
	<meta name="description" content="Strong Woman Do Bong Soon Info Page">
	<meta name="author" content="Kelly Wang">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Strong Woman Do Bong Soon &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/ysJzkl-SU1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Do Bong Soon, a woman born with supernatural strength, dreams of developing a game with her being the main character. A CEO of a video gaming company discovers her strength and hires her to be his personal body guard.  

        <h3>Where to Watch</h3>
        <a href="https://www.viki.com/tv/32311c-strong-woman-do-bong-soon">Viki</a><br>
        <a href="https://www.amazon.com/Strong-Woman-Do-Bong-Soon/dp/B0786XBPSR">Amazon Prime</a><br>
        <a href="https://www.justwatch.com/us/tv-show/strong-woman-do-bong-soon">Just Watch</a><br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/parkboyoung.jpg" alt="Park Bo Young">
            <figcaption>Park Bo Young as Do Bong Soon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/parkhyungsik.jpg" alt="Park Hyung-sik">
            <figcaption>Park Hyung-sik as An Min-Hyuk</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/jisoo.jpg" alt="Ji Soo">
            <figcaption>Ji Soo as In Kook-Do</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>