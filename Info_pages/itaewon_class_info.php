<!DOCTYPE html>

<html lang="en">

<head>
	<title>Itaewon Class</title>
	<meta charset="UTF-8">
	<meta name="description" content="Itaewon Class Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Itaewon Class &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/NNP8m3gaaFE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        After punching and refusing to apologize to the son of Jangga Group, Park Saeroyi gets expelled from school. After his father gets killed by the Jangga heir, Park Saeroyi gets jailed for attempting to kill Jang Geunwon. Saeroyi serves his sentence and leaves determined to take revenge on Jangga Group by starting a pub of his own.

        <h3>Where to Watch</h3>
        Only on <a href="https://www.netflix.com/title/81193309#:~:text=2020%20%7C%20TV%2DMA%20%7C%201,Kim%20Seong%2Dyun%2C%20Gwang%20Jin">Netflix</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/parkseojun.jpg" alt="Park Seojun">
            <figcaption>Park Seojun as Park Saeroyi</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimdami.jpg" alt="Kim Dami">
            <figcaption>Kim Dami as Jo Yiseo</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/yoojaemyung.jpg" alt="Yoo Jaemyung">
            <figcaption>Yoo Jaemyung as Jang Daehee</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kwonnara.jpg" alt="Kwon Nara">
            <figcaption>Kwon Nara as Oh Sooah</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>