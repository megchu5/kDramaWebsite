<!DOCTYPE html>

<html lang="en">

<head>
	<title>Memories of the Alhambra</title>
	<meta charset="UTF-8">
	<meta name="description" content="Memories of the Alhambra Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Memories of the Alhambra &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/2Lcy3XUDd_A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Investment company CEO, Yeo Jinwoo, receives word of a groundbreaking AR game that allows players to enter the mystical world of Alhambra. Jinwoo travels to Granada, Spain to meet the creator of the game, Jung Sejoo. When he arrives however, Sejoo's sister, Jung Heejoo, reveals that her brother has gone missing. In an attempt to secure the game before other companies catch wind of it, Jinwoo enters the world of Sejoo's AR game, opening his reality to the mysterious effects of Sejoo's creation.

        <h3>Where to Watch</h3>
        Only on <a href="https://www.netflix.com/title/81004280">Netflix</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/hyunbin.jpg" alt="Hyun Bin">
            <figcaption>Hyun Bin as Yeo Jinwoo</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/parkshinhye.jpg" alt="Park Shinhye">
            <figcaption>Park Shinhye as Jung Heejoo</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/parkchanyeol.png" alt="Park Chanyeol">
            <figcaption>Park Chanyeol as Jung Sejoo</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/18/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>