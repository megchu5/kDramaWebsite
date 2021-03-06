<!DOCTYPE html>

<html lang="en">

<head>
	<title>What's Wrong With Secretary Kim</title>
	<meta charset="UTF-8">
	<meta name="description" content="What's Wrong With Secretary Kim Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px"> What's Wrong With Secretary Kim &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/1xh8cujxUGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Lee Young-Joon's family runs a huge company and works as the vice-president of the company. He is intelligent, rich and handsome, but he is arrogant. His secretary is Kim Mi-So. She has worked for him for years and she is perfect for him, but Kim Mi-So decides to quit her job.
        

        <h3>Where to Watch</h3>
        <a href="https://www.viki.com/tv/35835c-whats-wrong-with-secretary-kim">Viki</a><br>
        <a href="https://www.hulu.com/series/62cf6cb0-3485-46ad-a0b6-75e542937f70">Hulu</a><br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/parkseojun.jpg" alt="Park Seo Jun">
            <figcaption>Park Seo Jun as Lee Young-Joon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/parkminyoung.jpg" alt="Park Min Young">
            <figcaption>Park Minyoung as Kim Miso </figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/leetaehwan.jpg" alt="Lee Tae-Hwan">
            <figcaption> Lee Tae-Hwan as Lee Sung-Yeon</figcaption>
        </figure>
        
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>