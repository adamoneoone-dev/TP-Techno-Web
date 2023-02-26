function helloWorld() {
	alert("Hello World")
}

function changerTitre() {
	var titre = prompt("Entrez le nouveau titre", "Titre");
	if(titre != null)
	{
		document.getElementById("titre1").innerHTML = titre;
	}
}

function changerFond() {
	document.getElementById("section1").style.backgroundColor = "lightblue";
}

window.onload = (event) => {
	var img = document.createElement("img");
	img.style.height = "3rem";
	img.onmouseenter = (event) => {img.style.height = "30rem";};
	img.onmouseleave = (event) => {img.style.height = "3rem";};
	img.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png";
	var src = document.getElementById("section1");
	src.appendChild(img);
};

function bigImage(img) {
	img.style.height = "30rem";
}
function normalImage(img) {
	img.style.height = "3rem";
}