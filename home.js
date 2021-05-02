var sites = ["Info_pages/crash_landing_info.php","Info_pages/itaewon_class_info.php","Info_pages/its_okay_info.php","Info_pages/start_up_info.php","Info_pages/true_beauty_info.php","Info_pages/dots_info.php","Info_pages/one_spring_info.php","Info_pages/suspicious_info.php","Info_pages/healer_info.php","Info_pages/lawless_lawyer_info.php","Info_pages/man_to_man.php","Info_pages/vagabond.php","Info_pages/vincenzo.php","Info_pages/hospital_playlist_info.php","Info_pages/laughter_waikiki_info.php","Info_pages/reply_1988_info.php","Info_pages/secretary_kim_info.php","Info_pages/strong_woman_info.php","Info_pages/arthdal.php","Info_pages/goblin.php","Info_pages/hotel_del_luna.php","Info_pages/oh_my_ghost.php","Info_pages/w.php"]

//Nav bar
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
    site = sites[idx].substr(11);
	window.open(site, "_self"); return false
}

function surprise_1() {
    var idx = Math.floor(Math.random()*23);
    window.open(sites[idx], "_self"); return false
}
