<!DOCTYPE html>

<html lang="en">

<head>
	<title>Tale of the Nine Tailed</title>
	<meta charset="UTF-8">
	<meta name="description" content="Tale of the Nine Tailed Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Tale of the Nine Tailed &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/PvnkFbEq2yg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Based on the Korean myth of the gumiho (nine-tailed fox), Tale of the Nine Tailed tells the story of Lee Yeon, gumiho and former guardian mountain spirit, as he searches for the reincarnated form of his one true love, Ah-eum. Yeon's half-brother, Lee Rang, harms humans as a way of revenge against Yeon, who abandoned him for a human. One day, Yeon meets Nam Ji-ah, a fearless television show producer who lost her parents in a mysterious car accident. Ji-ah believes her parents are still alive because their bodies were never found. Little does she know, she also bears an uncanny resemblance to Yeon's lover, Ah-eum.  

        <h3>Where to Watch</h3>
        Only on <a href="https://www.viki.com/tv/37373c-tale-of-the-nine-tailed">Viki</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/leedongwook.jpg" alt="Lee Dongwook">
            <figcaption>Lee Dongwook as Lee Yeon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/joboah.jpg" alt="Jo Boah">
            <figcaption>Jo Bo-ah as Nam Ji-ah and Ah-eum</figcaption>
        </figure>

    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/18/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>