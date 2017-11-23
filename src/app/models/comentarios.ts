export class Comentario {

	constructor(
		public _id: string,
		public ctexto: string,
		public cfecha: string,
		public publicacion_id: string,
		public user_id: string
		) {}
}