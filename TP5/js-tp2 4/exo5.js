
window.onload = function () {

	// le "handler" du setTimeout
	let chrono = null;

	// si 'ok' est 'true', alors l'utilisateur
	// a choisi la bonne réponse
	let ok = false;

	// affiche le message 'm' avec la couleur 'c'
	// dans l'élément prévu à cet effet
	function msg(m, c) {
		var msgbox = document.getElementById("message");
		msgbox.textContent = m;
		msgbox.style.color = c;
	}

	// cette fonction est appelée à l'issue
	// du setTimeout
	function stop() {
		msg("Vous n'avez pas réussi à trouver la bonne réponse dans le temps imparti", "red");
	}

	// traite le "clic" sur un bouton radio
	function verifier(event) {

	}

	// ici, on lance le setTimeout et stocke
	// le "handler" dans la variable 'chrono'
	chrono = setTimeout(stop, 5000);
};
