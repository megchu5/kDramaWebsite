<!DOCTYPE html>

<html lang="en">

<head>
	<title>Laughter in Waikiki</title>
	<meta charset="UTF-8">
	<meta name="description" content="Laughter in Waikiki Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px"> Laughter in Waikiki &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/AJ_eVJp-IuQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Kang Dong Gu is an aspiring film director. Lee Jun Ki wants to be an actor. Bong Doo Shik is working to be a writer and Kang Seo Jin wants to be a journalist. Each with their own dreams, these four quirk individuals run Waikiki guesthouse to make ends meet. 
        

        <h3>Where to Watch</h3>
        Only on <a href="https://www.viki.com/tv/36425c-welcome-to-waikiki">Viki</a>!<br>
        
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/junghyun.jpg" alt="Kim Junghyun">
            <figcaption>Kim Jung Hyun as Kang Dong-Goo</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/leeyikyung.jpg" alt="Lee Yi Kyung">
            <figcaption>Lee Yi Kyung as Lee Joon-Ki </figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/sonseungwon.jpg" alt="Son Seung-Won">
            <figcaption> Son Seung-Won as Bong-Doo-Sik</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/junginsun.jpg" alt="Jung In-Sun">
            <figcaption> Jung In-Sun as Han Yoon-A</figcaption>
        </figure>
        
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>