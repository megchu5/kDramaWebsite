<!DOCTYPE html>

<html lang="en">

<head>
	<title>My Love from Another Star</title>
	<meta charset="UTF-8">
	<meta name="description" content="My Love from Another Star Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">My Love From Another Star &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/AyQVdUxCA9E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Do Min-joon is an alien who landed on Earth in 1609 during the Joseon Dynasty. 
        He saves a girl named Seo Yi-hwa from falling off a cliff and misses his return trip to his home planet and 
        is stranded on Earth for the next four centuries.

        <h3>Where to Watch</h3>
        Only on <a href="https://www.viki.com/tv/20503c-my-love-from-the-star">Viki</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/kimsoohyun.jpg" alt="Kim Soo Hyun">
            <figcaption>Kim Soo Hyun as Do Min Joon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/jeonjihyun.jpg" alt="Jeon Ji Hyun">
            <figcaption>Jeon Ji Hyun as Cheon Song-Yi</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/parkhaejin.jpg" alt="Park Hae Jin">
            <figcaption>Park Hae Jin as Lee Whi-Kyung</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/yooinna.png" alt="Yoo In Na">
            <figcaption>Yoo In Na as Yoo Se Mi</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>