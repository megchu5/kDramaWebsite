<!DOCTYPE html>

<html lang="en">

<head>
	<title>Lawless Lawyer</title>
	<meta charset="UTF-8">
	<meta name="description" content="Lawless Lawyer Info Page">
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
        <p style="font-size:50px; font-weight:bold; margin:10px">Lawless Lawyer &starf;&starf;&starf;&starf;&starf;</p>

        <!--Star rating system - need to configure-->

        <iframe width="560" height="315" src="https://www.youtube.com/embed/-VE_zkaWCXc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id = 'right_body'>
        <h3>Synopsis</h3>
        The series follows characters Bong Sang-pil and Ha Jae-yi who form the Lawless Law Firm. Sang-pil, a former gangster turned lawyer, seeks to avenge his mother and fight against those with absolute power. He often resorts to using his fists and loopholes in the law to achieve his goals. Ha Jae-yi is a lawyer of high integrity who works with Sang-pil after she is suspended for assaulting a judge. Together they use the law to fight for justice against corrupt judge Cha Moon-sook and her associates.

        <h3>Where to Watch</h3>
        <a href="https://www.viki.com/tv/35833c-lawless-lawyer">Viki</a> <br>
    </div>

    <h4 style="clear:both">Main Actors</h4>

    <div id = 'actors'>
        <figure>
            <img src="Actor_pics/leejoongi.jpg" alt="Lee Joon-Gi">
            <figcaption>Lee Joon-Gi as Bong Sang-pil</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/seoyeji.jpg" alt="Seo Yea-ji">
            <figcaption>Seo Yea-ji as Ha Jae-yi</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/choiminsoo.jpg" alt="Choi Min-soo">
            <figcaption>Choi Min-soo as Ahn Oh-joo</figcaption>
        </figure>

        <figure>
            <img src="Actor_pics/leehyeyoung.jpg" alt="Lee Hye-young">
            <figcaption>Lee Hye-young as Cha Moon-sook</figcaption>
        </figure>
    </div>
    
    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 4/4/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>