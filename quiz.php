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
    <script src="quiz_rec.js"></script>
</head> 

<body>
    <!-- Header -->
    <div id = 'header'> 
        <a href="home.html"><img id = 'logo' src="logo.png" alt="Logo", width = 100>
        <h1>Soondu Koreaboo</h1>
        <h2>Dramas</h2></a>
    </div>
    
<div id = 'content'>

    <?php
		if (!isset($_COOKIE["loggedin"])) {
			header("Location: quiz_locked.php");
		}
	?>
   
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
        <a href="dramas.php">Dramas</a>
        <a href="actors.php">Actors</a>
        <a onclick = 'surprise()'>Surprise Me!</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <div id="question_box">
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", "on");

    session_start();
    if (!isset($_SESSION["romance"])) {
        $_SESSION["romance"] = 0;
        $_SESSION["comedy"] = 0;
        $_SESSION["action"] = 0;
        $_SESSION["fantasy"] = 0;
    };

    // Implement php code and maintain state while going through quiz
    if (isset($_POST["start"])) {
        if (!isset($num)) {
            $num = 1;
        };
        quiz_question($num);

    } else if (isset($_POST["show_results"])) {
        // test that an answer was selected
        $num = $_POST["show_results"];
        if (isset($_POST["ans$num"])) {
            // calculate the final totals for the session variables
            $ans = $_POST["ans$num"];
            calculate($ans);
            // show the final results
            results();
        } else {
            //echo "Please answer question $num";
            // last question was not answered, don't move on
            quiz_question($num);
        };

    } else if (isset($_POST["next"])) {
        // get the current question number
        $num = $_POST["ques_num"];

        // question number is less than 5 and an answer was selected
        if ($num < 5 && isset($_POST["ans$num"])) {
            // record the answer choice and add to session variables
            $ans = $_POST["ans$num"];
            calculate($ans);
            //echo "You chose $ans for question $num<br>";
            // advance to next question
            $num++;
        };
        quiz_question($num);

    } else {
        // initiatize session variables to record points
        
        // display the welcome page
        quiz_start();
        
    };

    // generate the welcome page and the start button
    function quiz_start() 
    {
        $script = $_SERVER['PHP_SELF'];
        print <<<START
            <span style='font-size:40px; font-weight:bolder'>What should I watch next?</span><br><br>
        
            Answer these 5 questions to find out your personalized K-drama recommendation!<br><br>

            <form method="POST" action="$script">
                <input type="submit" class="button" name="start" value="Start">
            </form>
START;
    }

    function quiz_question($num)
    {
        $script = $_SERVER['PHP_SELF'];

        $questions = array (
        1 => array (
            "0" => "Q1. The best part of a K-drama is always...",
            "1" => "<input name='ans1' type='radio' value='a'>When the main lead defeats the villain",
            "2" => "<input name='ans1' type='radio' value='b'>When the main characters fall in love with each other",
            "3" => "<input name='ans1' type='radio' value='c'>The Subway product placements",
            "4" => "<input name='ans1' type='radio' value='d'>When the second male lead gets the girl",
            "5" => "<input name='ans1' type='radio' value='e'>The plot twist at the end"
        ),

        2 => array (
            "0" => "Q2. Of the actors below, my favorite is...",
            "1" => "<input name='ans2' type='radio' value='a'>Lee Minho",
            "2" => "<input name='ans2' type='radio' value='b'>Kim Soohyun",
            "3" => "<input name='ans2' type='radio' value='c'>Park Seojoon",
            "4" => "<input name='ans2' type='radio' value='d'>Ji Changwook",
            "5" => "<input name='ans2' type='radio' value='e'>None of the above"
        ),

        3 => array (
            "0" => "Q3. Of the actresses below, my favorite is...",
            "1" => "<input name='ans3' type='radio' value='a'>IU",
            "2" => "<input name='ans3' type='radio' value='b'>Bae Suzy",
            "3" => "<input name='ans3' type='radio' value='c'>Park Shinhye",
            "4" => "<input name='ans3' type='radio' value='d'>Moon Gayoung",
            "5" => "<input name='ans3' type='radio' value='e'>None of the above"
        ),

        4 => array (
            "0" => "Q4. My ideal K-drama ending involves...",
            "1" => "<input name='ans4' type='radio' value='a'>Justice for the villains",
            "2" => "<input name='ans4' type='radio' value='b'>A romantic ending for the main leads",
            "3" => "<input name='ans4' type='radio' value='c'>I don't know. I can never finish a series.",
            "4" => "<input name='ans4' type='radio' value='d'>A satisfying storyline, even if there's no happy ending",
            "5" => "<input name='ans4' type='radio' value='e'>That moment when suddenly everything makes sense"
        ),

        5 => array (
            "0" => "Q5. Finally, just for fun, an ideal date would be at...",
            "1" => "<input name='ans5' type='radio' value='a'>An old, abandoned school",
            "2" => "<input name='ans5' type='radio' value='b'>The shopping mall",
            "3" => "<input name='ans5' type='radio' value='c'>An amusement park",
            "4" => "<input name='ans5' type='radio' value='d'>The park",
            "5" => "<input name='ans5' type='radio' value='e'>Somewhere far away"
        )
        );

        $qstem = $questions[$num][0];
        print <<<QUESTION
        <form method = "POST" action = "$script">
            <div id = "q$num">
                <h4 style = 'margin-bottom:10px'>$qstem</h4>

                <span style='text-align:left'>
QUESTION;

        for ($i = 1; $i < 6; $i++) {
            $choice = $questions[$num][$i];
            echo "<p><label style='margin-left:25px'>$choice</label><p>";
        };

        // buttons at the bottom will change if this is the last question
        if ($num == 5) {
        print <<<LAST
        </span>
        </div>

        <br><br>

        <div style='text-align:center' id='buttons'>
            <input class='button' name='next' type='submit' value='Submit'>
            <input name='show_results' type='hidden' value=$num>
        </div>

        <br>
        </form>
LAST;
        } else {
        print <<<NEXT
        </span>
        </div>

        <br><br>
        <div style='text-align:center' id='buttons'>
            <input class='button' name='next' type='submit' value='Next'>
            <input name='ques_num' type='hidden' value=$num>
        </div>

        <br>
        </form>
NEXT;
    };
    }

    // given a chosen answer, add to the appropriate session variables to keep track of genre preferences
    function calculate($ans) {
        if ($ans == "b" || $ans == "d") {
            $_SESSION["romance"] += 1;
        } else if ($ans == "a") {
            $_SESSION["action"] += 1;
        } else if ($ans == "c") {
            $_SESSION["comedy"] += 1;
        } else {
            $_SESSION["fantasy"] += 1;
        };
    }

    // given a genre, recommend a random drama within that genre
    function recommend($genre) {
        $dramas = array (
            "romance" => array('crash_landing_info', 'dots_info', 'lovestruck_info', 'one_spring_info', 'romance_book_info', 'start_up_info', 'suspicious_info', 'when_camellia'),
            "comedy" => array('true_beauty_info', 'hospital_playlist_info', 'laughter_waikiki_info', 'reply_1988_info', 'secretary_kim_info', 'strong_woman_info', 'vincenzo'),
            "action" => array('itaewon_class_info', 'healer_info', 'lawless_lawyer_info', 'man_to_man', 'vagabond', 'vincenzo'),
            "fantasy" => array('its_okay_info', 'arthdal', 'goblin', 'hotel_del_luna', 'oh_my_ghost', 'w', 'memories_of_alhambra', 'mystic_pop', 'tale_nine_tailed')
        );

        $drama_pics = array (
            "romance" => array('Most_Popular/Crash_Landing.jpg', 'Romance/Descendants.jpg', 'Romance/Lovestruck.jpg', 'Romance/One_Spring.jpg', 'Romance/Romance_Bonus.jpg', 'Most_Popular/Start_Up.jpg', 'Romance/Suspicious_Partner.jpg', 'Romance/When_the_Camellia_Blooms.jpg'),
            "comedy" => array('Most_Popular/True_Beauty.jpg', 'Comedy/Hospital_Playlist.jpg', 'Comedy/Laughter_in_Waikiki.jpg', 'Comedy/Reply_1988.jpg', "Comedy/What's_Wrong_with_Secretary_Kim.jpg", 'Comedy/Strong_Woman.jpg', 'Action/Vincenzo.jpg'),
            "action" => array('Most_Popular/Itaewon_Class.jpg', 'Action/Healer.jpg', 'Action/Lawless-Lawyer.jpg', 'Action/Man_to_Man.jpg', 'Action/Vagabond.jpg', 'Action/Vincenzo.jpg'),
            "fantasy" => array('Most_Popular/Its_Okay.jpg', 'Fantasy/Arthdal.jpg', 'Fantasy/Goblin.jpg', 'Fantasy/Hotel_Del_Luna.jpg', 'Fantasy/Oh_My_Ghost.jpg', 'Fantasy/W.jpg', 'Fantasy/Memories_Alhambra.jpg', 'Fantasy/Mystic_Popup_Bar.jpg', 'Fantasy/Tale_of_the_Nine-Tailed.png')
        );

        // get the length of the corresponding array of dramas
        $array_size = count($dramas[$genre]);

        // get a random index
        $idx = rand(0, $array_size - 1);

        // return the drama name and picture at the index
        $drama_name = $dramas[$genre][$idx];
        $picture = $drama_pics[$genre][$idx];
        $pair = array($drama_name, $picture);
        return $pair;
    }

    function results() {
        $script = $_SERVER['PHP_SELF'];
        // determine the genre with the highest number of points
        $highest = "romance";

        /*echo "Action points (a): ".$_SESSION["action"]."<br>";
        echo "Romance points (b/d): ".$_SESSION[$highest]."<br>";
        echo "Comedy points (c): ".$_SESSION["comedy"]."<br>";
        echo "Fantasy points (e): ".$_SESSION["fantasy"]."<br>";*/

        if ($_SESSION[$highest] < $_SESSION["comedy"]) {
            $highest = "comedy";
        };
        if ($_SESSION[$highest] < $_SESSION["action"]) {
            $highest = "action";
        };
        if ($_SESSION[$highest] < $_SESSION["fantasy"]) {
            $highest = "fantasy";
        };


        // get a drama recommendation
        $rec = recommend($highest);
        $title = $rec[0];
        $pic = $rec[1];

        session_destroy();
        
        // print the results page
        print <<<RESULTS
        <h4 style = 'margin-top:10px; margin-bottom:10px; font-size:28px'>Based on your answers, we think you would enjoy a <span style='color:red'>$highest</span> drama next!</h4>
        <p>Here's a recommendation! Click to learn more!</p><br>

        <div id="drama_rec">
        <a href="Info_pages/$title.html"><img src="KDramas/$pic" alt="$title" height="800px"></a>
        </div>

        <br><br>

        <form method="POST" action="$script">
        <div style='text-align:center' id='buttons'>
            <input class='button' name='start' type='submit' value='Retake the Quiz!'>
        </div>
        </form>
        
RESULTS;
    }

?>

    </div>
    </div>

    <footer>
        <hr style="color:#333;border-top:1px;">
        <h11>Last Updated: 4/3/2020 by Megan Chu, Jennifer Tang, Kelly Wang, and Laurence Wang</h11>
    </footer>

<!-- Sidebar Implementation -->
<script>
var sites = ["Info_pages/crash_landing_info.php","Info_pages/itaewon_class_info.php","Info_pages/its_okay_info.php","Info_pages/start_up_info.php","Info_pages/true_beauty_info.php","Info_pages/dots_info.php","Info_pages/one_spring_info.php","Info_pages/suspicious_info.php","Info_pages/healer_info.php","Info_pages/lawless_lawyer_info.php","Info_pages/man_to_man.php","Info_pages/vagabond.php","Info_pages/vincenzo.php","Info_pages/hospital_playlist_info.php","Info_pages/laughter_waikiki_info.php","Info_pages/reply_1988_info.php","Info_pages/secretary_kim_info.php","Info_pages/strong_woman_info.php","Info_pages/arthdal.php","Info_pages/goblin.php","Info_pages/hotel_del_luna.php","Info_pages/oh_my_ghost.php","Info_pages/w.php"]

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
	var idx = Math.floor(Math.random()*23);
	window.open(sites[idx], "_self"); return false
}
</script>

</body>
</html>