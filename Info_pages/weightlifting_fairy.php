<!DOCTYPE html>

<html lang="en">

<head>
	<title>Weightlifting Fairy</title>
	<meta charset="UTF-8">
	<meta name="description" content="Weightlifting Fairy Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Weightlifting Fairy &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/AMIStQUvc7s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Weightlifting Fairy is a youth sports drama inspired by the real-life story of Olympic weightlifting champion Jang Mi Ran. 
        The 28-year-old Lee played Kim Bok Joo, an innocent yet determined weightlifter who fell in love with swimmer Jung Joon Hyung, played by Nam Joo Hyuk

        <h3>Where to Watch</h3>
        Only on<a href="https://www.viki.com/tv/32634c-weightlifting-fairy-kim-bok-joo">Viki</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/leesungkyung.jpg" alt="Lee Sung Kyung">
            <figcaption>Lee Sung Kyung as Kim Bok-Jo</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/namjoohyuk.jpg" alt="Nam Joo Hyuk">
            <figcaption>Nam Joo Hyuk as Jung Joon Hyung</figcaption>
        </figure>
        
        <figure>
            <img src="Actor_pics/kyungsoojin.jpg" alt="Kyung Soo Jin">
            <figcaption>Kyung Soo Jin as Song Shi-Ho</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/leejaeyoon.jpg" alt="Lee Jae Yoon">
            <figcaption>Lee Jae Yoon as Jung Jae-Yi</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/4/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>