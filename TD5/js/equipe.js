class Equipe {

	constructor(nom, clt, pts, G, N, P, bp, bc, une_eval) {
		this.nom = nom;
		this.clt = clt;
		this.pts = pts;
		this.G = G;
		this.P = P;
		this.N = N;
		this.bp = bp;
		this.bc = bc;
		this.eval  = une_eval;
	}

	evaluer() {
		this.eval = this.pts * 1000 + (this.bp - this.bc) * this.bp;
	}

	affichage() {
		console.log(this.clt + " " + this.nom + " " + this.pts + " "+ this.gg + " " + this.N + " " + this.P + " " + " " + this.bp + " " + this.bc);
	}

	mise_a_jour(un_bp,un_bc) {
		this.bp = un_bp;
		this.bc = un_bc;
	}

}
