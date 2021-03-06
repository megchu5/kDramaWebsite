<!DOCTYPE html>

<html lang="en">

<head>
	<title>Reply 1988</title>
	<meta charset="UTF-8">
	<meta name="description" content="Reply 1988 Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Reply 1988 &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/c-EMf3JdxUA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Set in the year 1988, the story revolves around five friends and their families in the neighborhood of Ssangmun-dong, Dobong District, Northern Seoul. The story covers teenage struggles and memories.
        

        <h3>Where to Watch</h3>
        <a href="https://www.netflix.com/title/80188351?source=35">Netflix</a><br>
        <a href="https://www.viki.com/tv/26576c-reply-1988">Viki</a><br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/parkbogum.jpg" alt="Park Bo Gum">
            <figcaption>Park Bo Gum as Choi Taek</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/hyeri.jpg" alt="Hyeri">
            <figcaption>Hyeri as Duk-Sun </figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/gokyungpyo.jpg" alt="Go Kyung Pyo">
            <figcaption> Go Kyung Pyo as Sun-Woo</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/ryujunyeol.jpg" alt="Ryu Jun Yeol">
            <figcaption> Ryu Jun Yeol as Jung-Hwan</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>