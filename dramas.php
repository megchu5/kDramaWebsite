<!DOCTYPE html>

<html lang="en">

<head>
	<title>Soondu Koreaboo Dramas</title>
	<meta charset="UTF-8">
	<meta name="description" content="Empty page for links">
	<meta name="author" content="Jennifer Tang">
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
        <a href="actors.php">Actors</a>
        <a onclick = 'surprise_1()'>Surprise Me!</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    
    <!-- Description -->
    <div id = "Dramas">
        <h2>K-Dramas</h2>
        <h4 style="clear:both">A-E</h4>
        <table width = "100%">
            <tr>
                <td><a href = "Info_pages/arthdal.php">Arthdal Chronicles</a></td>
                <td><a href = "Info_pages/crash_landing_info.php">Crash Landing On You</a></td>
                <td><a href = "Info_pages/dots_info.php">Descendants of the Sun</a></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/abyss.php">Abyss</a></td>
                <td><a href = "Info_pages/big.php">Big</a></td>
                <td><a href = "Info_pages/boys_over_flowers.php">Boys Over Flowers</a></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/cinderella.php">Cinderella</a></td>
                <td><a href = "Info_pages/city_hunter.php">City Hunter</a></td>
                <td><a href = "Info_pages/doctor_stranger.php">Doctor Stranger</a></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/dreamhigh_info.php">Dream High</a></td>
                <td><a href = "Info_pages/extracurricular.php">Extracurricular</a></td>
                <td></td>
            </tr>
        </table>
        <h4 style="clear:both">F-J</h4>
        <table width = "100%">
            <tr>
                <td><a href = "Info_pages/goblin.php">Goblin</a></td>
                <td><a href = "Info_pages/healer_info.php">Healer</a></td>
                <td><a href = "Info_pages/hospital_playlist_info.php">Hospital Playlist</a></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/hotel_del_luna.php.">Hotel del Luna</a></td>
                <td><a href = "Info_pages/itaewon_class_info.php">Itaewon Class</a></td>
                <td><a href = "Info_pages/its_okay_info.php">It's Okay to Not Be Okay</a></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/heirs.php">Heirs</a></td>
                <td><a href = "Info_pages/your_voice.php">I Can Hear Your Voice</a></td>
                <td></td>
            </tr>
        </table>
        <h4 style="clear:both">K-O</h4>
        <table width = "100%">
            <tr>
                <td><a href = "Info_pages/laughter_waikiki_info.php">Laughter in Waikiki</a></td>
                <td><a href = "Info_pages/lawless_lawyer_info.php">Lawless Lawyer</a></td>
                <td><a href = "Info_pages/lovestruck_info.php">Lovestruck in the City</a></td>
                
            </tr>
            <tr>
                <td><a href = "Info_pages/man_to_man.php">Man to Man</a></td>
                <td> <a href = "Info_pages/memories_of_alhambra.php">Memories of the Alhambra</a></td>
                <td> <a href = "Info_pages/mystic_pop.php">Mystic Pop-Up Bar</a></td>
            </tr>
            <tr>
                <td> <a href = "Info_pages/navillera.php">Navillera</a></td>
                <td><a href = "Info_pages/oh_my_ghost.php">Oh my Ghost</a></td>
                <td><a href = "Info_pages/one_spring_info.php">One Spring Night</a></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/kill_me_heal_me.php">Kill Me Heal Me</a></td>
                <td><a href = "Info_pages/man_to_man.php">My Love From Another Star</a></td>
                <td></td>
            </tr>
        </table>
        <h4 style="clear:both">P-T</h4>
        <table width = "100%">
            <tr>
                <td><a href = "Info_pages/reply_1988_info.php">Reply 1988</a></td>
                <td><a href = "Info_pages/romance_book_info.php">Romance is a Bonus Book</a></td>
                <td><a href = "Info_pages/start_up_info.php">Start Up</a></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/strong_woman_info.php">Strong Woman Do Bong Soon</a></td>
                <td><a href = "Info_pages/suspicious_info.php">Suspicious Partner</a></td>
                <td> <a href = "Info_pages/tale_nine_tailed.php">Tale of the Nine-Tailed</a></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/true_beauty_info.php">True Beauty</a></td>
                <td><a href = "Info_pages/king_eternalmonarch.php">The King: Eternal Monarch</a></td>
                <td></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/pinnochio.php">Pinnochio</a></td>
                <td><a href = "Info_pages/strong_woman_info.php">Rain</a></td>
                <td><a href = "Info_pages/true_beauty_info.php">Reply 1997</a></td>
            </tr>
            <tr>
                <td><a href = "Info_pages/school_2017.php">School 2017</a></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <h4 style="clear:both">U-Z</h4>
        <table width = "100%">
            <tr>
                <td> <a href = "Info_pages/vagabond.php">Vagabond</a></td>
                <td> <a href = "Info_pages/vincenzo.php">Vincenzo</a></td>
                <td> <a href = "Info_pages/w.php">W</a></td>
            </tr>
            <tr>
                <td> <a href = "Info_pages/secretary_kim_info.php">What's Wrong with Secretary Kim</a></td>
                <td> <a href = "Info_pages/when_camellia.php">When the Camellia Blooms</a></td>
                <td></td>
            <tr>
                <td> <a href = "Info_pages/weightlifting_fairy.php">Weightlifting Fairy</a></td>
                <td> <a href = "Info_pages/world_of_the_married.php">World of the Married</a></td>
                <td></td>
            </tr>
        </table>
    </div>
    
    <footer>
        <hr style:"color=#333;border-top:1px;">
        <h11>Last Updated: 4/5/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>


</body>
</html>