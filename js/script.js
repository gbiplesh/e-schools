function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
function w3_close() {
	document.getElementById("main").style.marginLeft = "0";
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
  	document.getElementsByClassName("w3-opennav")[0].style.display = "inline-block";

}

function fb_in() {
	document.getElementById('fb').src ="img/fb.png";
	// document.getElementById('fb').style.border = "1px whitesmoke solid";
}

function fb_out() {
	document.getElementById('fb').src ="img/fb logo.png";
	document.getElementById('fb').style.border = "";
}

function twitter_in() {
	document.getElementById('twitter').src ="img/twitter.png";
	// document.getElementById('twitter').style.border = "1px whitesmoke solid";
}

function twitter_out() {
	document.getElementById('twitter').src ="img/twitter logo.png";
	document.getElementById('twitter').style.border = "";
}

function insta_in() {
	document.getElementById('insta').src ="img/insta.png";
	// document.getElementById('insta').style.border = "1px whitesmoke solid";
}

function insta_out() {
	document.getElementById('insta').src ="img/insta logo.png";
	document.getElementById('insta').style.border = "";
}

function alert() {
	document.getElementsById("alerts");
	document.getElementById("alerts").innerHTML = 
	'<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Success!</strong> Indicates a successful or positive action.';
	document.getElementById("alerts").class = "alert alert-warning alert-dismissible fade show";
}