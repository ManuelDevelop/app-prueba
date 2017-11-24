export class Publicacion {

	constructor(
		public _id: string,
		public ptexto: string,
		public pfecha: string,
		public user_id: string,
		public comentarios
		) {}
}