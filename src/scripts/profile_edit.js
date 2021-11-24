var loadFile = function(event) {
	var image = document.getElementById('profile_picture');
	image.style.backgroundImage = "url(\""+URL.createObjectURL(event.target.files[0])+"\")";
}