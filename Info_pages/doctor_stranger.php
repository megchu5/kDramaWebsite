<!DOCTYPE html>

<html lang="en">

<head>
	<title>Doctor Stranger</title>
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Doctor Stranger &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/ZBjdGi8HCQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Park Hoon is a South Korean who was captured with his father and grew up in North Korea. His father trains him to become
        a successful doctor. He becomes a doctor in South Korea; however, he strives to find his lost first love in North Korea. 

        <h3>Where to Watch</h3>
        <a href=https://www.viki.com/tv/22343c-doctor-stranger>Viki</a><br>
        <a href=https://www.amazon.com/gp/video/detail/amzn1.dv.gti.4ab0405d-ae94-aac9-a030-ac900da42612?autoplay=1&ref_=atv_cf_strg_wb>Amazon Prime</a><br>

        
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/leejongsuk.png" alt="leejongsuk">
            <figcaption>Lee Jong Suk as Park Hoon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/jinseyeon.jpg" alt="Jin Se Yeon">
            <figcaption>Jin Se Yeon as Song Jae Hee</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kangsora.jpg" alt="Kang So Ra">
            <figcaption>Kang So Ra as Oh Soo Hyun</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/parkhaejin.jpg" alt="Park Hae Jin">
            <figcaption>Park Hae Jin as Han Jae-joon</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/31/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>