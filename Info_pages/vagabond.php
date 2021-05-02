<!DOCTYPE html>

<html lang="en">

<head>
	<title>Vagabond</title>
	<meta charset="UTF-8">
	<meta name="description" content="Vincenzo Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Vagabond &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/PndjeodkGj8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        The entire country is shaken by the tragic news of a plane crash that claimed the lives of over 200 civilians, among them Cha Dal-gun’s (Lee Seung-gi) young nephew. Driven to uncover the truth behind his loss, Dal-gun won’t stop at anything — especially when he discovers how deep the corruption runs. His life intertwines with NIS agent Go Hae-ri (Bae Suzy) as they work together to unravel the mystery. What’s the truth behind the plane crash, and can one civilian take on an entire government to get justice? 
        
        <h3>Where to Watch</h3>
        <a href="https://www.netflix.com/title/81095101">Netflix</a> <br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/leeseunggi.jpg" alt="Lee Seung-gi">
            <figcaption>Lee Seung-gi as Cha Dal-gun</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/baesuzy.jpg" alt="Bae Suzy">
            <figcaption>Bae Suzy as Go Hae-ri</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/4/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>