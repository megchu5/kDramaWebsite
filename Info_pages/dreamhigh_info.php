<!DOCTYPE html>

<html lang="en">

<head>
	<title>Dream High</title>
	<meta charset="UTF-8">
	<meta name="description" content="Dream High Info Page">
	<meta name="author" content="Kelly">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Dream High &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/Dh8t8tdwAiA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Six students at Kirin Art High School work to make their dreams a reality in the music and entertainment industry in Korea. 
        While at school, the students learn to sing, write songs, and dance. 

        <h3>Where to Watch</h3>
        Only on <a href=https://www.viki.com/tv/902c-dream-high>Viki!</a><br>
        
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/baesuzy.jpg" alt="Bae Suzy">
            <figcaption>Bae Suzy as Ko Hye-Mi</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimsoohyun.jpg" alt="Kim Soo Hyun">
            <figcaption>Kim Soo Hyun as Song Sam Dong</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/IU.jpg" alt="IU">
            <figcaption>IU as Kim Pil Suk</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/oktaecyeon.jpg" alt="Ok Taecyeon">
            <figcaption>Ok Taecyeon as Jin-Kuk</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/31/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>