class Journee {

		constructor(match1,match2,match3,match4) {
			this.match1 = match1;
			this.match2 = match2;
			this.match3 = match3;
			this.match4 = match4;
			this.played = false;
		}

		afficher() {
			document.querySelector('#match1').innerHTML = this.match1.affichage();
			document.querySelector('#match2').innerHTML = this.match2.affichage();
			document.querySelector('#match3').innerHTML = this.match3.affichage();
			document.querySelector('#match4').innerHTML = this.match4.affichage();
		}

		jouer() {


		}

}
