let xhr = new XMLHttpRequest();
let div_verbes = document.getElementById("liste_verbes");
let div_input = document.getElementById("input");

// la ligne suivante est à décommenter après écriture de creer_interface
document.body.onload = creer_interface;

function creer_interface() {
  let zone = document.createElement("input");
  zone.setAttribute("type", "text");
  zone.setAttribute("disabled", "");
  div_input.appendChild(zone)

  alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j","k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z"];

  for(let i = 0; i < alphabet.length; i++)
  {
    let b1 = document.createElement("input");
    b1.setAttribute("type", "button");
    b1.setAttribute("value", alphabet[i]);
    div_input.appendChild(b1);
  }
  let effacer = document.createElement("input");
  effacer.setAttribute("type", "button");
  effacer.setAttribute("value", "effacer");
  div_input.appendChild(effacer);

}

function callback_basique() {
  let xhrJSON = JSON.parse(xhr.responseText);
  console.log(xhrJSON);
}

function callback() {
  // à faire
}

function charger_verbes(lettre,type) {
  // à faire
}
