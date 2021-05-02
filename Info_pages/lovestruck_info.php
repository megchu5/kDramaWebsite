<!DOCTYPE html>

<html lang="en">

<head>
	<title>Lovestruck in the City</title>
	<meta charset="UTF-8">
	<meta name="description" content="Lovestruck in the City Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Lovestruck in the City &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/c_LSBRJB3wE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Set in the format of a documentary, this drama tells the story of six people and their love lives. Park Jaewon, an architect based in Seoul, is unable to forget a woman by the name of Yoon Seonha, whom he met on a two-month long getaway to Yangyang Beach. There, the couple had fallen in love and even gotten married, though not legally. After stealing his cameras (and his heart), this "camera thief" disappears without a trace. This thief is actually Lee Eunho, freelance marketer. She is best friends with Seo Rini, who has been in a long-term relationship with Park Jaewon's younger cousin Choi Kyeongjun. Kang Geon, a self-employed novelist, has been single for years, and Oh Seonyeong is rarely single. 

        <h3>Where to Watch</h3>
        Only on <a href="https://www.netflix.com/title/81340910?source=35">Netflix</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/jichangwook.png" alt="Ji Changwook">
            <figcaption>Ji Changwook as Park Jaewon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimjiwon.jpg" alt="Kim Jiwon">
            <figcaption>Kim Jiwon as Lee Eunho</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimminseok.jpg" alt="Kim Minseok">
            <figcaption>Kim Minseok as Choi Kyeongjun</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/sojooyeon.jpg" alt="So Jooyeon">
            <figcaption>So Jooyeon as Seo Rini</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/ryukyungsoo.jpg" alt="Ryu Kyungsoo">
            <figcaption>Ryu Kyungsoo as Kang Geon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/hanjieun.jpg" alt="Han Jieun">
            <figcaption>Han Jieun as Oh Seonyeong</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/2/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>