<!DOCTYPE html>

<html lang="en">

<head>
	<title>Man to Man</title>
	<meta charset="UTF-8">
	<meta name="description" content="Man to Man Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Man to Man &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/NkzpydOA29I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        A longtime celebrity Yeo Woon-gwang (Park Sung-woong) suddenly has a need for a bodyguard and hires Kim Seol-woo (Park Hae-jin), a handsome and mysterious man trained in special investigations who has many talents. In reality, Seol-woo is a NIS black ops agent who has his own agenda and the role of bodyguard is only a cover to achieve his goals. The drama is about the twisty events they encounter and the budding bromance between the star and bodyguard. In addition, Seol-woo gets romantically involved with Cha Do-ha (Kim Min-jung), the manager of Woon-gwang.

        <h3>Where to Watch</h3>
        <a href="https://www.netflix.com/watch/80176866?source=35">Netflix</a> <br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/parkhaejin.jpg" alt="Park Hae-jin">
            <figcaption>Park Hae-jin as Kim Seol-Woo</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimminjung.jpg" alt="Kim Min-jung">
            <figcaption>Kim Min-jung as Cha Do-ha</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/parksungwoong.jpg" alt="Park Sung-woong">
            <figcaption>Park Sung-woong as Yeo Woon-gwang</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/4/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>