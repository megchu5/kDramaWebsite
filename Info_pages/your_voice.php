<!DOCTYPE html>

<html lang="en">

<head>
	<title>I Can Hear Your Voice</title>
	<meta charset="UTF-8">
	<meta name="description" content="I Can Hear Your Voice">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">I Can Hear Your Voice &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/WGfwdjEcK2o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        After overcoming poverty and a difficult childhood, Jang Hye-sung (Lee Bo-young) becomes a lawyer, specifically a public defender, but she is pragmatic, self-preserving and jaded. Her life changes when she encounters Park Soo-ha (Lee Jong-suk), a high school senior with the supernatural ability to read other people's thoughts by looking into their eyes.

        <h3>Where to Watch</h3>
        <a href="https://www.viki.com/tv/12147c-i-hear-your-voice">Viki</a><br>
        
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/leeboyoung.jpg" alt="Lee Bo-young">
            <figcaption>Lee Bo-young as Jang Hye-sung</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/leejongsuk.png" alt="Lee Jong-suk">
            <figcaption>Lee Jong-suk as Park Soo-ha</figcaption>
        </figure>
        
        <figure>
            <img src="Actor_pics/yoonsanghyun.jpg" alt="Yoon Sang-hyun">
            <figcaption>Yoon Sang-hyun as Cha Gwan-woo</figcaption>
        </figure>
        
        <figure>
            <img src="Actor_pics/leedahee.jpg" alt="Lee Da-hee">
            <figcaption>Lee Da-hee as Seo Do-yeon</figcaption>
        </figure>
        
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>