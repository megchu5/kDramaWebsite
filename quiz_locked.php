<!DOCTYPE html>

<html lang="en">

<head>
	<title>Soondu Koreaboo Dramas Quiz</title>
	<meta charset="UTF-8">
	<meta name="description" content="What drama should I watch next?">
	<meta name="author" content="Jennifer Tang">
	<link href="home.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <script src="home.js"></script>
</head> 

<body>
    <!-- Header -->
    <div id = 'header'> 
        <a href="home.html"><img id = 'logo' src="logo.png" alt="Logo", width = 100>
        <h1>Soondu Koreaboo</h1>
        <h2>Dramas</h2></a>
    </div>
    
<div id = 'content'>

    <script>
        function quizCookie() {
            <?php
                setcookie("quizLogin", "true", time()+(10 * 365 * 24 * 60 * 60), "/");
            ?>
        }
    </script>

    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home.html">Home</a>
        <?php
            if (!isset($_COOKIE["loggedin"])) {
                echo "<a href = 'login.php'>Login/Register</a>";
            } else {
                echo "<form method='POST' action='home.php'>";
                echo "<input class = 'logout' type='submit' name = 'logout' value = 'Logout'>";
                echo "</form>";
            }   
	    ?>
        <a href="dramas.php">Dramas</a>
        <a href="actors.php">Actors</a>
        <a onclick = 'surprise_1()'>Surprise Me!</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div id = 'quiz_locked'>
        <br>
        <h2>Want to access our quiz?</h2>
        <h3>Click below to login or create a new account!</h3>
        <a href="login.php"><input class = "button" type = "submit" name = "input" value = "Login/Register"></a>
    </div> 

</div>

<!-- Sidebar Implementation -->
<script>
var sites = ["/Info_pages/crash_landing_info.html","/Info_pages/itaewon_class_info.html","/Info_pages/its_okay_info.html","/Info_pages/start_up_info.html","/Info_pages/true_beauty_info.html","/Info_pages/dots_info.html","/Info_pages/one_spring_info.html","/Info_pages/suspicious_info.html","/Info_pages/healer_info.html","/Info_pages/lawless_lawyer_info.html","/Info_pages/man_to_man.html","/Info_pages/vagabond.html","/Info_pages/vincenzo.html","/Info_pages/hospital_playlist_info.html","/Info_pages/laughter_waikiki_info.html","/Info_pages/reply_1988_info.html","/Info_pages/secretary_kim_info.html","/Info_pages/strong_woman_info.html","/Info_pages/arthdal.html","/Info_pages/goblin.html","/Info_pages/hotel_del_luna.html","/Info_pages/oh_my_ghost.html","/Info_pages/w.html"]

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("content").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("content").style.marginLeft= "0";
}
    
//Surprise me
function surprise(){
    console.log('hello');
	var idx = Math.floor(Math.random()*23);
	window.open(sites[idx], "_self"); return false
}
</script>

</body>
</html>