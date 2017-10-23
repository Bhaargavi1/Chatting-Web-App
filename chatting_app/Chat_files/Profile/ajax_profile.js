
// ajax function for chat_request send back on the html page
function msg_ajax()
{ 
    var req = new XMLHttpRequest();
    req.onreadystatechange = function() 
	{ 
		if(req.readyState == 4 && req.status == 200)
		{ 
			document.getElementById('msgs').innerHTML = req.responseText; 
		}
	}
	req.open('POST', "database_profile.php", true);
    req.send();
} 
setInterval(function(){ 
    msg_ajax(); 
    }, 100); 
var msg = document.getElementById('msgs');
function girl(){
    msg.style.backgroundImage = "url('../../assets/images/msg_girl.jpg')";
}
function cars(){
    msg.style.backgroundImage = "url('../../assets/images/msg_cars.jpg')";
} 
function game(){
    msg.style.backgroundImage = "url('../../assets/images/msg_game.jpg')";
} 
function music(){
    msg.style.backgroundImage = "url('../../assets/images/msg_music.jpg')";
}
function def() {
   msg.style.backgroundImage = "url('../../assets/images/msg_bg.jpg')";
}