
window.onload = function () {

	// affiche le nombre "t" dans le span "spanElt"
	// "t" a au plus deux chiffres
	function afficher(t, spanElt) {
		
	}

	// met à jour les images de l'horloge
	// à chaque seconde
	function tictac() {
		const d = new Date();

		var secondes = d.getSeconds();
		var minutes = d.getMinutes();
		var heures = d.getHours();
	}

	// ici, il faut lancer l'horloge
	var intervalleHorloge = setInterval(tictac, 1000);
};
