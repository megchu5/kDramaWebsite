<!DOCTYPE html>

<html lang="en">

<head>
	<title>Healer</title>
	<meta charset="UTF-8">
	<meta name="description" content="Healer Info Page">
	<meta name="author" content="Megan Chu">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Healer &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/EcOhZLULyFA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        A decades-old incident involving a group of five friends who ran an illegal pro-democracy broadcasting station during the Fifth Republic in South Korea brings together three different people???an illegal "night courier" with the codename "Healer" (Ji Chang-wook) who possesses top-notch fighting skills, a reporter from a second-rate tabloid news website (Park Min-young), and a famous journalist at a major broadcast station (Yoo Ji-tae) In trying to uncover the truth from that 1992 incident, they grow into real, honest reporters, while dealing with the conflict between truth and fate.

        <h3>Where to Watch</h3>
        <a href="https://www.amazon.com/Healer-Season-1/dp/B017ODFVL8#:~:text=Watch%20Healer%20%2D%20Season%201%20%7C%20Prime%20Video">Amazon Prime</a><br>
        <a href="https://www.viki.com/tv/23730c-healer">Viki</a> <br>
        <a href="https://www.kocowa.com/en_us/channel/813585/Healer">Kocowa</a>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/jichangwook.png" alt="Ji Chang-wook">
            <figcaption>Ji Chang-wook as Seo Junghoo</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/parkminyoung.jpg" alt="Park Min-young">
            <figcaption>Park Min-young as Chae Young Shin</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/yoojitae.jpg" alt="Yoo Ji-tae">
            <figcaption>Yoo Ji-tae as Kim Moon-ho</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimmikyung.jpg" alt="Kim Mi-kyung">
            <figcaption>Kim Mi-kyung as Jo Min-ja</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/4/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>