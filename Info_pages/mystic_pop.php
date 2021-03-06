<!DOCTYPE html>

<html lang="en">

<head>
	<title>Mystic Pop-Up Bar</title>
	<meta charset="UTF-8">
	<meta name="description" content="Mystic Pop-Up Bar Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Mystic Pop-Up Bar &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/pqaOkAyo0pI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Due to a tragic event in her past life, Weol-ju must spend her afterlife settling the grudges of 100,000 souls. In order to keep up with the times, she and a former afterlife detective, Chief Gwi, run an outdoor drinking stall. At the nearby supermarket, part-time employee Han Kang-bae has struggled his whole life with his ability to make others spill all of their problems with just a touch. Once Weol-ju hears about this ability, she makes a deal with Kang-bae to help get rid of it for him after he helps her fulfill the last of her punishment.  

        <h3>Where to Watch</h3>
        Only on <a href="https://www.netflix.com/title/81264882">Netflix</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/hwangjungeum.jpg" alt="Hwang Jungeum">
            <figcaption>Hwang Jungeum as Weol-ju</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/choiwonyoung.jpg" alt="Choi Wonyoung">
            <figcaption>Choi Wonyoung as Chief Gwi</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/yooksungjae.jpg" alt="Yook Sungjae">
            <figcaption>Yook Sungjae as Han Kang-bae</figcaption>
        </figure>

    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/18/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>