<!DOCTYPE html>

<html lang="en">

<head>
	<title>Reply 1997</title>
	<meta charset="UTF-8">
	<meta name="description" content="Reply 1997 Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Reply 1997 &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/uQOwbp3m_Ec" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Set in the 1997, a female high high school student Shi-Won, who idolizes boyband H.O.T and her 5 high school friends.
        

        <h3>Where to Watch</h3>
        <a href="https://www.netflix.com/title/70297144">Netflix</a><br>
        <a href="https://www.viki.com/tv/9462c-reply-1997">Viki</a><br>
        <a href="https://www.amazon.com/gp/video/detail/amzn1.dv.gti.30b02482-8eea-0f75-8ac0-265b9e0ee950?autoplay=1&ref_=atv_cf_strg_wb">Amazon Prime</a><br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/jungeunji.jpg" alt="Jung Eun Ji">
            <figcaption>Jung Eun Ji as Sung Si-Won</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/seoinguk.jpg" alt="Seo In Guk">
            <figcaption>Seo Inguk as Yoon Yoon-je </figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/hoya.jpg" alt="hoya">
            <figcaption> Hoya as Kang Joon He</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/eunjiwon.jpg" alt="Eun Ji-Won">
            <figcaption> Eun Ji Won as Do Hak-Chan</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>