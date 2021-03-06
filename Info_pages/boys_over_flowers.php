<!DOCTYPE html>

<html lang="en">

<head>
	<title>Boys Over Flowers</title>
	<meta charset="UTF-8">
	<meta name="description" content="Boys Over Flowers">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Boys Over Flowers &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/rMN2rtQ5cQY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Jan Di is an average girl whose family owns a dry cleaning store located near the luxurious and well known Shin Hwa High School. After saving a boy from jumping off the roof of Shin Hwa High School, Jan Di is admitted into the school on a swimming scholarship. At school, Jan Di tries to avoid confrontation with the four richest and most spoiled boys known as the F4, because she knows what happens to those that stand against them. 

        <h3>Where to Watch</h3>
        <a href="https://www.viki.com/tv/50c-boys-over-flowers">Viki</a><br>
        <a href="https://www.netflix.com/watch/70213130?source=35">Netflix</a><br>
        <a href="https://www.hulu.com/profiles?next=/series/2113c940-a5b0-491d-a49a-6090d788871a">Hulu</a><br>
        <a href="https://www.amazon.com/Boys-Over-Flowers-Season-1/dp/B017ODFUBE">Amazon prime</a>
        
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/koohyesun.jpg" alt="Koo Hye-sun">
            <figcaption>Koo Hye-sun as Geum Jan-di</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/leeminho.jpg" alt="Lee Min-ho">
            <figcaption>Lee Min-ho as Goo Joon-pyo</figcaption>
        </figure>
        
        <figure>
            <img src="Actor_pics/kimhyunjoong.jpg" alt="Kim Hyun-joong">
            <figcaption>Kim Hyun-joong as Yoon Ji-hoo</figcaption>
        </figure>
        
        <figure>
            <img src="Actor_pics/kimbum.jpg" alt="Kim Bum">
            <figcaption>Kim Bum as So Yi-jung</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimjoon.jpg" alt="Kim Joon">
            <figcaption>Kim Joon as Song Woo-bin</figcaption>
        </figure>
        
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>