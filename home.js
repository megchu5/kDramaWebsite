var sites = ["../Info_pages/crash_landing_info.html","../Info_pages/Itaewon_class_info.html","../Info_pages/Its_okay_info.html","../Info_pages/start_up_info.html","../Info_pages/true_beauty_info.html","../Info_pages/dots_info.html","../Info_pages/one_spring_info.html","../Info_pages/suspicious_info.html","../Info_pages/healer_info.html","../Info_pages/lawless_lawyer_info.html","../Info_pages/man_to_man.html","../Info_pages/vagabond.html","../Info_pages/vincenzo.html","../Info_pages/hospital_playlist_info.html","../Info_pages/laughter_waikiki_info.html","../Info_pages/reply_1988_info.html","../Info_pages/secretary_kim_info.html","../Info_pages/strong_woman_info.html","../Info_pages/arthdal.html","../Info_pages/goblin.html","../Info_pages/hotel_del_luna.html","../Info_pages/oh_my_ghost.html","../Info_pages/w.html"]

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
    console.log('hello');
	var idx = Math.floor(Math.random()*23);
	window.open(sites[idx], "_self"); return false
}
