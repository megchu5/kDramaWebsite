<!DOCTYPE html>

<html lang="en">

<head>
	<title>The King: Eternal Monarch</title>
	<meta charset="UTF-8">
	<meta name="description" content="Heart Strings Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">The King: Eternal Monarch &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/N1L1iaFZQ9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        The king of the kingdom of Korea discovers a path into the parallel world, the Republic of Korea. A detective tries to protect the people and the one she loves.

        <h3>Where to Watch</h3>
        Only on <a href="https://www.netflix.com/watch/81260283?source=35">Netflix</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/leeminho.jpg" alt="Lee Min Ho">
            <figcaption>Lee Min Ho as Lee Gon</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kimgoeun.png" alt="Kim Go Eun">
            <figcaption>Kim Go Eun as Jeong Tae Eul</figcaption>
        </figure>

    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/19/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>