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
		}

		jouer() {


		}

}
