<!DOCTYPE html>
<html lang="en">

<head>
	<title>Soondu Koreaboo Dramas</title>
	<meta charset="UTF-8">
	<meta name="description" content="Phase 3">
	<meta name="author" content="Megan Chu">
	<link href="home.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <script type = 'text/javascript' src = 'home.js'></script>
</head> 

<body>
    <!-- Header -->
    <div id = 'header'> 
        <a href="home.php"><img id = 'logo' src="logo.png" alt="Logo", width = 100></a>
        <a href="home.php"><h1>Soondu Koreaboo</h1></a>
        <a href="home.php"><h2>Dramas</h2></a>
    </div>
    
<div id = 'content'>

    <?php 
        if (isset($_POST['logout'])) {
            setcookie("loggedin", "true", time()-(10 * 365 * 24 * 60 * 60), "/");
            setcookie("quizLogin", "true", time()-(10 * 365 * 24 * 60 * 60), "/");
            header("Location: home.php");
        }
    ?>

    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
        <a onclick = "surprise_1()">Surprise Me!</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    
    <!-- Description -->
    
    <div id = 'description'>
        <h3>Soondu Koreaboo is a play on the Korean soft tofu soup (soondubu) and the name for those who enjoy Korean pop culture. 
            No matter if you’ve just discovered the expansive world of K-dramas or if you’re a seasoned veteran, this 
            site aims to help you find what you should watch next! Head over to the Quiz to let us do the searching, or browse 
            our library of shows! Happy watching!</h3>    
    </div>
    
    <!-- Most Popular -->
    <div id = 'popular'>
        <h4>Most Popular</h4>
    </div>
    
    <div class = 'movies'>
        <div class="scrollmenu">
            <div class = 'container'>
                <a href="Info_pages/crash_landing_info.php"><img src="KDramas/Most_Popular/Crash_Landing.jpg" alt="Crash Landing on You" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Crash Landing on You</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/itaewon_class_info.php"><img src="KDramas/Most_Popular/Itaewon_Class.jpg" alt="Itaewon Class" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Itaewon Class</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/its_okay_info.php"><img src="KDramas/Most_Popular/Its_Okay.jpg" alt="It's Okay to Not Be Okay" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>It's Okay to Not Be Okay</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/start_up_info.php"><img src="KDramas/Most_Popular/Start_Up.jpg" alt="Start Up" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Start Up</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/true_beauty_info.php"><img src="KDramas/Most_Popular/True_Beauty.jpg" alt="True Beauty" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>True Beauty</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/boys_over_flowers.php"><img src="KDramas/Most_Popular/Boys_Over_Flowers.jpg" alt="Boys Over Flowers" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Boys Over Flowers</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/navillera.php"><img src="KDramas/Most_Popular/Navillera.jpg" alt="Navillera" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Navillera</div>
                </div>
            </div>  
            
                
        </div>
    </div>
    
    <!-- Romance -->
    <div id = 'romance'>
        <h4>Romance</h4>
    </div>

    <div class = 'movies'>
        <div class="scrollmenu">
            <div class = 'container'>
                <a href="Info_pages/dots_info.php"><img src="KDramas/Romance/Descendants.jpg" alt="Descendants of the Sun" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Descendants of the Sun</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/one_spring_info.php"><img src="KDramas/Romance/One_Spring.jpg" alt="One Spring Night" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>One Spring Night</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/suspicious_info.php"><img src="KDramas/Romance/Suspicious_Partner.jpg" alt="Suspicious Partner" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Suspicious Partner</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/lovestruck_info.php"><img src="KDramas/Romance/Lovestruck.jpg" alt="Lovestruck in the City" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Lovestruck in the City</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/romance_book_info.php"><img src="KDramas/Romance/Romance_Bonus.jpg" alt="Romance is a Bonus Book" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Romance is a Bonus Book</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/cinderella.php"><img src="KDramas/Romance/Cinderella.jpg" alt="Cinderella and the Four Knights" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Cinderella and the Four Knights</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/heirs.php"><img src="KDramas/Romance/Heirs.jpg" alt="Heirs" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>The Heirs</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/your_voice.php"><img src="KDramas/Romance/I_Can_Hear_Your_Voice.jpg" alt="I Can Hear Your Voice" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>I Can Hear Your Voice</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/rain.php"><img src="KDramas/Romance/Something_In_The_Rain.jpeg" alt="Something in the Rain" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Something in the Rain</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/when_camellia.php"><img src="KDramas/Romance/When_the_Camellia_Blooms.jpg" alt="When the Camellia Blooms" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>When the Camellia Blooms</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/world_of_the_married.php"><img src="KDramas/Romance/world_of_married.jpg" alt="World of the Married" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>World of the Married</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/my_love_from_another_star.php"><img src="KDramas/Romance/mylovefromanotherstar.jpg" alt="My Love From Another Star" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Kill Me Heal Me</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/pinnochio.php"><img src="KDramas/Romance/pinnochio.jpg" alt="Pinnochio" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Pinnochio</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/school_2017.php"><img src="KDramas/Romance/school2017.jpg" alt="School 2017" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>School 2017</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/doctor_stranger.php"><img src="KDramas/Romance/doctorstranger.jpg" alt="Doctor stranger" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Doctor Stranger</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Action -->
    <div id = 'action'>
        <h4>Action</h4>
    </div>

    <div class = 'movies'>
        <div class="scrollmenu">
            <div class = 'container'>
                <a href="Info_pages/healer_info.php"><img src="KDramas/Action/Healer.jpg" alt="Healer" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Healer</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/lawless_lawyer_info.php"><img src="KDramas/Action/Lawless-Lawyer.jpg" alt="Lawless Lawyer" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Lawless Lawyer</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/man_to_man.php"><img src="KDramas/Action/Man_to_Man.jpg" alt="Man to Man" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Man to Man</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/vagabond.php"><img src="KDramas/Action/Vagabond.jpg" alt="Vagabond" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Vagabond</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/vincenzo.php"><img src="KDramas/Action/Vincenzo.jpg" alt="Vincenzo" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Vincenzo</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/extracurricular.php"><img src="KDramas/Action/extracurricular.jpg" alt="Extracurricular" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Extracurricular</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/city_hunter.php"><img src="KDramas/Action/cityhunter.jpg" alt="City Hunter" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>City Hunter</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comedy -->
    <div id = 'comedy'>
        <h4>Comedy</h4>
    </div>

    <div class = 'movies'>
        <div class = 'scrollmenu'>
            <div class = 'container'>
                <a href="Info_pages/hospital_playlist_info.php"><img src="KDramas/Comedy/Hospital_Playlist.jpg" alt="Hospital Playlist" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Hospital Playlist</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/laughter_waikiki_info.php"><img src="KDramas/Comedy/Laughter_in_Waikiki.jpg" alt="Laughter in Waikiki" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Laughter in Waikiki</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/reply_1988_info.php"><img src="KDramas/Comedy/Reply_1988.jpg" alt="Reply 1988" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Reply 1988</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/strong_woman_info.php"><img src="KDramas/Comedy/Strong_Woman.jpg" alt="Strong Woman Do Bong Soon" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Strong Woman Do Bong Soon</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/secretary_kim_info.php"><img src="KDramas/Comedy/WWSK.jpg" alt="What's Wrong with Secretary Kim" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>What's Wrong with Secretary Kim</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/big.php"><img src="KDramas/Comedy/big.jpg" alt="Big" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Big</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/fight_my_way.php"><img src="KDramas/Comedy/fightmyway.jpg" alt="Fight My Way" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Fight My Way</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/reply_1997.php"><img src="KDramas/Comedy/reply_1997.jpeg" alt="Reply 1997" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Reply 1997</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/weightlifting_fairy.php"><img src="KDramas/Comedy/weightlifting_fairy.jpg" alt="Weightlifting Fairy" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Weightlifting Fairy</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/dreamhigh_info.php"><img src="KDramas/Comedy/dreamhigh.jpg" alt="Dream High" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Dream High</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fantasy -->
    <div id = 'fantasy'>
        <h4>Fantasy</h4>
    </div>

    <div class = 'movies'>
        <div class = 'scrollmenu'>
            <div class = 'container'>
                <a href="Info_pages/arthdal.php"><img src="KDramas/Fantasy/Arthdal.jpg" alt="Arthdal Chronicles" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Arthdal Chronicles</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/goblin.php"><img src="KDramas/Fantasy/Goblin.jpg" alt="Goblin" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Goblin</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/hotel_del_luna.php"><img src="KDramas/Fantasy/Hotel_Del_Luna.jpg" alt="Hotel del Luna" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Hotel del Luna</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/oh_my_ghost.php"><img src="KDramas/Fantasy/Oh_My_Ghost.jpg" alt="Oh My Ghost" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Oh My Ghost</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/w.php"><img src="KDramas/Fantasy/W.jpg" alt="W" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>W</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/memories_of_alhambra.php"><img src="KDramas/Fantasy/Memories_Alhambra.jpg" alt="Memories of Alhambra" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Memories of Alhambra</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/tale_nine_tailed.php"><img src="KDramas/Fantasy/Tale_of_the_Nine-Tailed.png" alt="Tale of the Nine-Tailed" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Tale of the Nine-Tailed</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/mystic_pop.php"><img src="KDramas/Fantasy/Mystic_Popup_Bar.jpg" alt="Mystic Pop-Up Bar" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Mystic Pop-Up Bar</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/abyss.php"><img src="KDramas/Fantasy/abyss.jpg" alt="abyss" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>Abyss</div>
                </div>
            </div>
            <div class = 'container'>
                <a href="Info_pages/king_eternalmonarch.php"><img src="KDramas/Fantasy/the_king_eternal_monarch.jpg" alt="King Eternal Monarch" width="200"></a>
                <div class = 'middle'>
                    <div class = 'text'>The King: Eternal Monarch</div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <hr style="color:#333;border-top:1px;clear:both">
        <h11>Last Updated: 5/4/2021 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

</div>

</body>
</html>