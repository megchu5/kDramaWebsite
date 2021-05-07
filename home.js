var sites = ['crash_landing_info', 'dots_info', 'lovestruck_info', 'one_spring_info', 'romance_book_info', 'start_up_info', 'suspicious_info', 'when_camellia', 'boys_over_flowers', 'cinderella', 'doctor_stranger', 'heirs', 'kill_me_heal_me', 'my_love_from_another_star', 'school_2017', 'world_of_the_married', 'your_voice', 'true_beauty_info', 'hospital_playlist_info', 'laughter_waikiki_info', 'reply_1988_info', 'secretary_kim_info', 'strong_woman_info', 'vincenzo', 'big', 'dreamhigh_info', 'fight_my_way', 'reply_1997', 'weightlifting_fairy', 'itaewon_class_info', 'healer_info', 'lawless_lawyer_info', 'man_to_man', 'vagabond', 'city_hunter', 'extracurricular', 'its_okay_info', 'arthdal', 'goblin', 'hotel_del_luna', 'oh_my_ghost', 'w', 'memories_of_alhambra', 'mystic_pop', 'tale_nine_tailed', 'abyss', 'king_eternalmonarch', 'navillera'];

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
	var idx = Math.floor(Math.random()*sites.length);
    site = sites[idx] + ".php";
	window.open(site, "_self"); return false
}

function surprise_1() {
    var idx = Math.floor(Math.random()*sites.length);
    site = "Info_pages/" + sites[idx] + ".php";
    window.open(site, "_self"); return false
}
