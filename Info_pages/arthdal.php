<!DOCTYPE html>

<html lang="en">

<head>
	<title>Arthdal Chronicles</title>
	<meta charset="UTF-8">
	<meta name="description" content="Arthdal Chronicles Info Page">
	<meta name="author" content="Laurence Wang">
	<link href="info_pages.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <script type = 'text/javascript' src = '../home.js'></script>
</head> 

<body>
    <!-- Header -->
    <div id = 'header'> 
        <a href="../home.html"><img id = 'logo' src="../logo.png" alt="Logo", width = 100></a>
        <a href="../home.html"><h1>Soondu Koreaboo</h1></a>
        <a href="../home.html"><h2>Dramas</h2></a>
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Arthdal Chronicles &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/n8bExCqgOtk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Follow Eun-seom in the mythical land of Arth as he encounters several obstacles in order to revive his tribe, learning of his unexpected origins amidst power struggles. 

        <h3>Where to Watch</h3>
        Only on <a href="https://www.netflix.com/search?q=arthdal%20chronicles&jbv=81028895">Netflix</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/jangdonggun.jpg" alt="Jang Dong-gun">
            <figcaption>Jang Dong-gun as Ta-gon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/songjoongki.jpg" alt="Song Joong-ki">
            <figcaption>Song Joong-ki as Eun-seom and Saya</figcaption>
        </figure>

	<figure>
            <img src="Actor_pics/kimjiwon.jpg" alt="Kim Ji-won">
            <figcaption>Kim Ji-won as Tan-ya</figcaption>
        </figure>

	<figure>
            <img src="Actor_pics/kimokvin.jpg" alt="Kim Ok-vin">
            <figcaption>Kim Ok-vin as Tae Al-ha</figcaption>
        </figure>

    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/5/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>