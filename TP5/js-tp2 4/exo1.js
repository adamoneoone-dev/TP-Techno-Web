window.onload = function () {
	
	// les noms des fichiers images
	var sources = ["paysage-1.jpg", "paysage-2.jpg", "paysage-3.jpg",
		"paysage-4.jpg", "paysage-5.jpg", "paysage-6.jpg",
		"paysage-7.jpg", "paysage-8.jpg", "paysage-9.jpg"];

	// l'indice de l'image actuellement visible
	var indice = 0;
	var leftarr = document.getElementById("leftarr");
	var rightarr = document.getElementById("rightarr");
	leftarr.addEventListener("click", previous);
	rightarr.addEventListener("click", next);
	// affiche l'image suivante
	function next() {
		var image = document.getElementById("show");
		indice += 1;
		if(indice >= sources.length) {
			indice = 0;
		}
		image.src = "images/" + sources[indice];
	}

	// affiche l'image précédente
	function previous() {
		var image = document.getElementById("show");
		indice -= 1;
		if(indice < 0) {
			indice = sources.length - 1;
		}
		console.log(indice);
		image.src = "images/" + sources[indice];
		console.log(image.src);
	}
};