<?php
// This php file will search a collection of databases to find actors or dramas given by the user

// debugging only
error_reporting(E_ALL);
ini_set("display_errors", "on");

// Connect to MySQL Server
$mysqli = new mysqli("spring-2021.cs.utexas.edu", "cs329e_bulko_jentang", 'Memo=munich$Stray', "cs329e_bulko_jentang");

// debugging only
/*
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
} else {
    echo "<code>...Connection successful</code> <br>";
} 
*/

//Select Database
$mysqli->select_db("cs329e_bulko_jentang") or die($mysqli->error);

// retrieve data from user input
$sLast = $_GET["last"];
$sFirst = $_GET["first"];
$sDrama = $_GET["drama"];

$sLast = $mysqli->real_escape_string($sLast);
$sFirst = $mysqli->real_escape_string($sFirst);
$sDrama = $mysqli->real_escape_string($sDrama);

// determine results to show given user input
if ($sLast == '' && $sFirst == '' & $sDrama == '') {
    //show_all();
    all_actors($mysqli);
} else {
    search_dbases($mysqli, $sLast, $sFirst, $sDrama);
}

// function searches databases for actors given last name, first name, and drama name
function search_dbases($mysqli, $sLast, $sFirst, $sDrama) {
    // build query string
    $query = "SELECT * FROM actors JOIN actorPics ON actors.lastName = actorPics.lastName AND actors.firstName = actorPics.firstName";

    // account for case if one or more of the variables are left empty
    if ($sLast != "") {
        $query .= " WHERE actors.lastName = \"$sLast\"";
        $search = "\"$sLast";
    }
    if ($sFirst != "") {
        if ($sLast != "") {
            $query .= " AND actors.firstName = \"$sFirst\"";
            $search .= " $sFirst";
        } else {
            $query .= " WHERE actors.firstName = \"$sFirst\"";
            $search = "\"$sFirst";
        }
    }
    if ($sDrama != "") {
        if ($sLast != "" || $sFirst != "") {
            $query .= " AND dramaTitle = \"$sDrama\"";
            $search .= "\" in \"$sDrama\"";
        } else {
            $query .= " WHERE dramaTitle = \"$sDrama\"";
            $search = "\"$sDrama\"";
        }
    } else {
        $search .= "\"";
    }
    $query .= ";";

    // search database and build a table with the results
    $result = $mysqli->query($query) or die($mysqli->error);
    $count = 0;
    $printed = [];

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $count += 1;
        $name = "$row[lastName] $row[firstName]";
        if ($count == 1) {
            $display_string = "<h4>Search Results for $search</h4>";
        }
        if (!array_key_exists($name, $printed)) {
            $printed[$name] = 1;
            $display_string .= "<figure> <div class='flip-box'> <div class='flip-box-inner'> <div class='flip-box-front'>";
            $display_string .= "<img src='Info_pages/Actor_pics/$row[pic]' style='width:160px;height:200px'>";
            $display_string .= "</div> <div class='flip-box-back'> $row[dramaLinks]";
            $display_string .= "</div> </div> </div>";
            $display_string .= "<figcaption>$row[lastName] $row[firstName]</figcaption> </figure>";
        }
    }

    // account for case that there are no results that match
    if ($count == 0) {
        $display_string = "<h4>No Results for $search</h4>";
    }

    // display the results
    echo $display_string;
}

function all_actors($mysqli) {
    // build query for all actors alphabetically ordered
    $query = "SELECT * FROM actorPics ORDER BY lastName, firstName;";

    // search database and build a table with the results
    $result = $mysqli->query($query) or die($mysqli->error);

    $display_AE = "<h4>A - E</h4>";
    $display_FJ = "<h4>F - J</h4>";
    $display_KO = "<h4>K - O</h4>";
    $display_PT = "<h4>P - T</h4>";
    $display_UZ = "<h4>U - Z</h4>";

    // print the results
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        // build the string for each actor
        $display_string = "";
        $display_string .= "<figure> <div class='flip-box'> <div class='flip-box-inner'> <div class='flip-box-front'>";
        $display_string .= "<img src='Info_pages/Actor_pics/$row[pic]' style='width:160px;height:200px'>";
        $display_string .= "</div> <div class='flip-box-back'> $row[dramaLinks]";
        $display_string .= "</div> </div> </div>";
        $display_string .= "<figcaption>$row[lastName] $row[firstName]</figcaption> </figure>";

        // determine which group actor belongs alphabetically
        $lastName = "$row[lastName]";
        $firstName = "$row[firstName]";

        if ($lastName == '') {
            $reference = $firstName;
        } else {
            $reference = $lastName;
        }

        if (strcmp("A", $reference) < 1 AND strcmp($reference, "F") < 1) {
            $display_AE .= $display_string;
        } else if (strcmp("F", $reference) < 1 AND strcmp($reference, "K") < 1) {
            $display_FJ .= $display_string;
        } else if (strcmp("K", $reference) < 1 AND strcmp($reference, "P") < 1) {
            $display_KO .= $display_string;
        } else if (strcmp("P", $reference) < 1 AND strcmp($reference, "U") < 1) {
            $display_PT .= $display_string;
        } else {
            $display_UZ .= $display_string;
        } 
        
    }

    // display the results
    echo $display_AE.$display_FJ.$display_KO.$display_PT.$display_UZ;
}

function show_all($mysqli) {
    print <<<ALL
    <div>
       <h4>A-E</h4>
            <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/baesuzy.jpg" alt="Bae Suzy" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href='Info_pages/big.html'>Big</a></p><p><a href='Info_pages/dreamhigh_info.html'>Dream High</a></p><p><a href='Info_pages/start_up_info.html'>Start Up</a></p><p><a href='Info_pages/vagabond.html'>Vagabond</a></p>
                    </div>
                </div>
            </div>
            <figcaption>Bae Suzy</figcaption>
            </figure>
            
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/chaeunwoo.jpg" alt="Cha Eun-Woo" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">True Beauty</a></p>
                    </div>
                </div>
            </div>
            <figcaption>Cha Eun-woo</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/choiminsoo.jpg" alt="Choi Min-soo" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Choi Min-soo</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/choitaejoon.jpg" alt="Choi Tae-joon" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Choi Tae-joon</figcaption>
           </figure>
    </div>
    
    <div>
        <h4>F-J</h4>
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/gokyungpyo.jpg" alt="Go Kyung-pyo" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Go Kyung-pyo</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/gongyoo.png" alt="Gong Yoo" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Gong Yoo</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/hanhyojoo.jpg" alt="Han Hyo-joo" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Han Hyo-joo</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/hanjimin.jpg" alt="Han Ji-min" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Han Ji-min</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/hwanginyeop.jpg" alt="Hwang In-yeop" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">True Beauty</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Hwang In-yeop</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/hyeri.jpg" alt="Hyeri" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Hyeri</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/hyunbin.jpg" alt="Hyun Bin" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Hyun Bin</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/IU.jpg" alt="IU" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>IU</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/jangdonggun.jpg" alt="Jang Dong-gun" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Jang Dong-gun</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/jeonmido.jpg" alt="Jeon Mi-do" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Jeon Mi-do</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/jeonyeobeen.jpg" alt="Jeon Yeo-been" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Jeon Yeo-been</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/jichangwook.png" alt="Ji Chang-wook" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Ji Chang-wook</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/jingoo.jpg" alt="Jin Goo" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Jin Goo</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/jisoo.jpg" alt="Ji soo" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Ji Soo</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/jojungsuk.jpg" alt="Jo Jung-suk" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Jo Jung-suk</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/junghaein.jpg" alt="Jung Hae-in" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Jung Hae-in</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/junghyun.jpg" alt="Jung Hyun" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Jung Hyun</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/junginsun.jpg" alt="Jung In-sun" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Jung In-sun</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/jungkyungho.jpg" alt="Jung Kyung-ho" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Jung Kyung-ho</figcaption>
           </figure>
    </div>
    
    <div>
        <h4>K-O</h4>
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimdami.jpg" alt="Kim Da-mi" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Da-mi</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimgoeun.png" alt="Kim Go-eun" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Go-eun</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimjiwon.jpg" alt="Kim Ji-won" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Ji-won</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimjunhan.jpg" alt="Kim Jun-han" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Jun-han</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimmikyung.jpg" alt="Kim Mi-kyung" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Mi-kyung</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimminjung.jpg" alt="Kim Min-jung" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Min-jung</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimokvin.jpg" alt="Kim Ok-vin" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Ok-vin</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimseonho.jpg" alt="Kim Seon-ho" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Seon-ho</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimseulgi.png" alt="Kim Seul-gi" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Seul-gi</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kimsoohyun.jpg" alt="Kim Soo-hyun" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kim Soo-hyun</figcaption>
           </figure>

           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kwakdongyeon.jpg" alt="Kwak Dong-yeon" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption style='font-size: 18px'>Kwak Dong-yeon</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/kwonnara.jpg" alt="Kwon Nara" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Kwon Nara</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/leedongwook.jpg" alt="Lee Dong-wook" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Lee Dong-wook</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/leehyeyoung.jpg" alt="Lee Hye-young" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Lee Hye-young</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/leejongsuk.png" alt="Lee Jong-suk" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Lee Jong-suk</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/leejoongi.jpg" alt="Lee Joon-gi" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Lee Joon-gi</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/leeseunggi.jpg" alt="Lee Seung-gi" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Lee Seung-gi</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/leetaehwan.jpg" alt="Lee Tae-hwan" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Lee Tae-hwan</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/leeyikyung.jpg" alt="Lee Yi-kyung" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Lee Yi-kyung</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/limjuhwan.jpg" alt="Lim Ju-hwan" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Lim Ju-hwan</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/moongayoung.jpg" alt="Moon Ga-young" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Moon Gayoung</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/namjihyun.jpg" alt="Nam Ji-hyun" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Nam Ji-hyun</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/namjoohyuk.jpg" alt="Nam Joo-hyuk" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Nam Joo-hyuk</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/ohjungse.jpg" alt="Oh Jung-se" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Oh Jung-se</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/oktaecyeon.jpg" alt="Ok Taec-yeon" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Ok Taec-yeon</figcaption>
           </figure>
           
           
        <div>
            <h4>P-T</h4>
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/parkbogum.jpg" alt="Park Bo-gum" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Park Bo-gum</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/parkboyoung.jpg" alt="Park Bo-young" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Park Bo-young</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/parkhaejin.jpg" alt="Park Hae-jin" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Park Hae-jin</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/parkminyoung.jpg" alt="Park Min-young" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Park Min-young</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/parkseojun.jpg" alt="Park Seo-jun" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Park Seo-jun</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/parksungwoong.jpg" alt="Park Sung-woong" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption style='font-size: 18px'>Park Sung-woong</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/ryujunyeol.jpg" alt="Ryu Jun-yeol" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Ryu Jun-yeol</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/seojihye.jpg" alt="Seo Ji-hye" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Seo Ji-hye</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/seoyeji.jpg" alt="Seo Ye-ji" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Seo Ye-ji</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/songhyekyo.jpg" alt="Song Hye-kyo" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Song Hye-kyo</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/songjoongki.jpg" alt="Song Joong-ki" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Song Joong-ki</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/sonseungwon.jpg" alt="Son Seung-won" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Son Seung-won</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/sonyejin.jpg" alt="Son Ye-jin" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Son Ye-jin</figcaption>
           </figure>
        </div>
        
        <div>
            <h4>U-Z</h4>
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/yeojingoo.png" alt="Yeo Jin-goo" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Yeo Jin-goo</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/yooinna.png" alt="Yoo In-na" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Yoo In-na</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/yoojaemyung.jpg" alt="Yoo Jae-myung" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Yoo Jae-myung</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/yoojitae.jpg" alt="Yoo Ji-tae" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Yoo Ji-tae</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/yooyeonseok.jpg" alt="Yoo Yeon-seok" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Yoo Yeon-seok</figcaption>
           </figure>
           
           <figure>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="Info_pages/Actor_pics/yooksungjae.jpg" alt="Yook Sung-jae" style="width:160px;height:200px">
                    </div>
                    <div class="flip-box-back">
                        <p><a href="Info_pages/true_beauty_info.html">Drama1</a></p>
                    </div>
                </div>
            </div>
               <figcaption>Yook Sung-jae</figcaption>
           </figure>
            
        </div>
        
    </div>
ALL;
}

?>