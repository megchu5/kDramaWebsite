<!DOCTYPE html>

<html lang="en">

<head>
	<title>It's Okay to Not Be Okay</title>
	<meta charset="UTF-8">
	<meta name="description" content="It's Okay to Not Be Okay Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">It's Okay to Not Be Okay &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/1H__LNPCc80" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Moon Gangtae has lived his whole life caring for his older brother, Moon Sangtae, because of Sangtae's autism. Ever since witnessing their mother's murder, Sangtae's condition causes the brothers to have to move towns frequently. In each town, Gangtae works as a psychiatric ward caretaker. When they return to their hometown, Gangtae meets Go Moonyoung, a popular children's book author infamous for her heartless and unpredictable attitude. Moonyoung begins to grow a romantic obsession for Gangtae, and the trio endure the consequences of their pasts together. 

        <h3>Where to Watch</h3>
        Only on <a href="https://www.netflix.com/title/81243992">Netflix</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/kimsoohyun.jpg" alt="Kim Soohyun">
            <figcaption>Kim Soohyun as Moon Gangtae</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/seoyeji.jpg" alt="Seo Yeji">
            <figcaption>Seo Yeji as Go Moonyoung</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/ohjungse.jpg" alt="Oh Jungse">
            <figcaption>Oh Jungse as Moon Sangtae</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/30/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>