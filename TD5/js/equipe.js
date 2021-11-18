class Equipe {

	constructor(nom, cla, pts, gg, p, n, bp, bc, evaluation  ) {
		this.nom = nom;
		this.cla = cla;
		this.pts = pts;
		this.gg = gg;
		this.p = p;
		this.n = n;
		this.bp = bp;
		this.bc = bc;
		this.eval  = Math.random();
	}

	evaluer() {
		this.eval = this.pts * 1000 + (this.bp - this.bc) * this.bp;
	}

	affichage() {
		document.write("evaluation:" + " " + this.eval + "points:" + " " + this.pts )
	}

	mise_a_jour(bp,bc) {
		// à compléter
	}

}
