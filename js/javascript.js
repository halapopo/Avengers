//PARAMETRAGE DU VIDEO BACKGROUND pour le button pause

document.createElement('video');

var vid = document.getElementById("bgvid");

var pauseButton = document.getElementById("vidpause");

function vidFade() {

vid.classList.add("stopfade");

}

vid.addEventListener('ended', function() {

// only functional if "loop" is removed

vid.pause();

// to capture IE10

vidFade();

});

pauseButton.addEventListener("click", function() {

vid.classList.toggle("stopfade");

if (vid.paused) {

vid.play();

pauseButton.innerHTML = "Pause";

} else {

vid.pause();

 pauseButton.innerHTML = "Paused";

}

})


$("bgvid").prop('muted', true);


//SCROLL STYLE


	var ypos,video;
	function parallex() {
		video = document.getElementById('bgvid');
		ypos = window.pageYOffset;
		video.style.top = ypos * .7+ 'px';
	}
	window.addEventListener('scroll', parallex),false;

//SCROLL TO

$('#scrollButton').ScrollTo('#ynopsish3');