<!DOCTYPE html>

<html lang="en">

<head>
	<title>Suspicious Partner</title>
	<meta charset="UTF-8">
	<meta name="description" content="Suspicious Partner Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Suspicious Partner &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/sq00CLr4VI0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        Eun Bonghee is a prosecuter in training who mistakes prosecutor Noh Jiwook as a molester on the subway. Later that same day, Bonghee discovers her boyfriend with another woman, so she vows that she will sleep with the next man she encounters. This next man turns out to be Jiwook! A few months later, Bonghee is assigned to Jiwook's office where she works hard to solve criminal mysteries. Due to the appearance of an amnesiac murderer, Bonghee becomes enveloped in a murder case as a suspect.

        <h3>Where to Watch</h3>
        Only on <a href="https://www.viki.com/tv/34557c-suspicious-partner">Viki</a>!<br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/jichangwook.png" alt="Ji Changwook">
            <figcaption>Ji Changwook as Noh Jiwook</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/namjihyun.jpg" alt="Nam Jihyun">
            <figcaption>Nam Jihyun as Eun Bonghee</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/choitaejoon.jpg" alt="Choi Taejoon">
            <figcaption>Choi Taejoon as Ji Eunhyuk</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/kwonnara.jpg" alt="Kwon Nara">
            <figcaption>Kwon Nara as Cha Yoo Jung</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 3/31/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>