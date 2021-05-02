<!DOCTYPE html>

<html lang="en">

<head>
	<title>Descendants of the Sun</title>
	<meta charset="UTF-8">
	<meta name="description" content="Descendants of the Sun Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Descendants of the Sun &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/wkHjOTFv60g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Named the Most Popular Show of the year in 2016, Descendants of the Sun gained international recognition during its broadcast. The romance and action drama follows the story of Yoo Sijin, captain of a South Korean Special Forces Unit, and Dr. Kang Moyeon. Upon their first meeting in the hospital, Sijin is instantly attracted to Dr. Kang, but the pair are separated when Sijin is called to duty in the war-torn country of Uruk. A turn of events leads Dr. Kang to Uruk along with a team of medical volunteers where she reunites with Captain Sijin. Along the way, she meets Sijin's right-hand man Master Sergeant Seo Daeyoung and his romantic partner, army surgeon Yoon Myungju. 

        <h3>Where to Watch</h3>
        <a href="https://www.viki.com/tv/23205c-descendants-of-the-sun">Viki</a><br>
        <a href="https://www.hulu.com/series/21d3967a-6112-45b1-a1fc-068d717e9ece">Hulu</a><br>
        <a href="https://www.amazon.com/gp/video/detail/B0786XB5LD/ref=atv_dp_share_cu_r">Amazon Prime</a><br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/songjoongki.jpg" alt="Song Joongki">
            <figcaption>Song Joongki as Yoo Sijin</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/songhyekyo.jpg" alt="Song Hyekyo">
            <figcaption>Song Hyekyo as Kang Moyeon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/jingoo.jpg" alt="Jin Goo">
            <figcaption>Jin Goo as Seo Daeyoung</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimjiwon.jpg" alt="Kim Jiwon">
            <figcaption>Kim Jiwon as Yoon Myungju</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/31/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>