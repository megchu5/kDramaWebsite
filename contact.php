<!DOCTYPE html>

<html lang="en">

<head>
	<title>Soondu Koreaboo Dramas Contact Us</title>
	<meta charset="UTF-8">
	<meta name="description" content="Phase 3">
	<meta name="author" content="Kelly Wang">
	<link href="home.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <script type = 'text/javascript' src = 'home.js'></script>
</head> 

<body>
    <!-- Header -->
    <div id = 'header'> 
        <a href="home.html"><img id = 'logo' src="logo.png" alt="Logo", width = 100>
        <h1>Soondu Koreaboo</h1>
        <h2>Dramas</h2></a>
    </div>
    
<div id = 'content'>
   
    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home.php">Home</a>
        <?php
            if (!isset($_COOKIE["loggedin"])) {
                echo "<a href = 'login.php'>Login/Register</a>";
            } else {
                echo "<form method='POST' action='home.php'>";
                echo "<input class = 'logout' type='submit' name = 'logout' value = 'Logout'>";
                echo "</form>";
            }   
	    ?>
        <a href="quiz.php">Quiz</a>
        <a href="dramas.php">Dramas</a>
        <a href="actors.php">Actors</a>
        <a onclick = 'surprise_1()'>Surprise Me!</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div id = 'title'>
        Contact Us
    </div>

    <br>


    <!-- Description -->

    <div class = 'info'>
        <img src="ourpics/megchu.jpg" class = 'info_img'>
        <div class = 'info_txt'>
        <br>
        <h10>Megan Chu</h10>
        <hr>
        meg.chu5@gmail.com &#0149; 123-456-7890
        <p>
            Megan Chu is a third-year at UT Austin obtaining a B.S.A in Chemistry and a certificate in both Elements of Computing 
            and in Scientific Computation and Data Sciences. She is also currently a pre-med student pursuing a career in 
            providing healthcare. Her favorite K-drama is a classic, Boys Over Flowers, and she has watched it a total of 5 times.
        </p>
        </div>
    </div>
    <div class = 'info'>
        <img src="ourpics/jen.jpg" class = 'info_img'>
        <div class = 'info_txt'>
        <br>
        <h10>Jennifer Tang</h10>
        <hr>
        jentangx09@gmail.com &#0149; 123-456-7890
        <p>
            Jennifer Tang is a junior biology major who loves to spend her school breaks binge watching K-dramas.
             Her favorite genre is romantic comedy, and her favorite drama recently is True Beauty! Old favorites include Descendants of the Sun, 
             Goblin, Hospital Playlist, and many more!
        </p>
        </div>
    </div>
    <div class = 'info'>
        <img src="ourpics/portrait.jpg" class = 'info_img'>
        <div class = 'info_txt'>
        <br>
        <h10>Kelly Wang</h10>
        <hr>
        kellywang011@utexas.edu &#0149; 123-456-7890
        <p>
            Kelly is currently a 3rd year student majoring in Finance and pursuing a certificate in Computer Science at the University of Texas at Austin.
            She is pursuing a finance and technology-driven career that will allow her to combine her Finance background and programming skills 
            through digitilization and analytic efforts. Her all time favorite K-drama is Crash Landing On You, and some of her top contenders are 
            Itaewon Class and Weightlifting Fairy.
        </p>
        </div>
    </div>

    <div class = 'info'>
        <img src="ourpics/lwang.jpg" class = 'info_img'>
        <div class = 'info_txt'>
        <br>
        <h10>Laurence Wang</h10>
        <hr>
        laurencenwang@gmail.com &#0149; 832-508-2674
        <p>
            Laurence is currently a Junior majoring in Actuarial Science at UT Austin, with a certificate in Computer Science 
            and a minor in Chinese. His favorite K-Drama genres are thrillers and romcoms.
        </p>
        </div>
    </div>

    <div class = 'info'>
        <form method= 'POST'>
            <label><h10>Is your favorite show not featured? We would love to hear from you!</h10>
            <br>
            <br>
            <!-- <input type="text" name="comments" class="textbox"><br> -->
            <textarea name = "comments" rows = "20" cols = "80"> Enter your comments here:</textarea>
            </label>
            <br>
            <input class = "button" type = "submit" name = "input" value = "Submit"/>
        </form>
    </div>
</div>

</body>
</html>

<?php
    if(isset($_POST['comments'])){
        $data=$_POST['comments'];
        $file = fopen('data.txt', 'a');
        fwrite($file, "\n");
        fwrite($file, $data);
        fclose($file);
    }
?>
