import { Component,OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { LoginService } from '../../services/login.service';
import { User } from '../../models/user';
import { Comentario } from '../../models/comentarios';
import { Foto } from '../../models/fotos';
import { Publicacion } from '../../models/publicacion';
import { GLOBAL } from '../../services/global';
import { PerfilService } from '../../services/perfil.service';
import { InicioService } from '../../services/inicio.service';

@Component({
	selector:'Perfil',
	templateUrl: './perfil.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/dist/css/skins/_all-skins.min.css',
	'../../../ExtraMario/css/stylePC.css'
	],
	providers:[LoginService,PerfilService,InicioService]
})
export class PerfilComponent implements OnInit{

	public identida: User;
	public imagenUser:String;
	public url:String;
	public myperfil:boolean;
	public listPublicaciones:Publicacion[];
	public comentario:Comentario;
	public publicacion: Publicacion;
	public filefoto;
	public foto: Foto;

	constructor(
		private logservice: LoginService,
		private perfilservice:PerfilService,
		private iniservice: InicioService,
		private _route:ActivatedRoute,
		private _router:Router
		){
		this.url=GLOBAL.url;
		this.myperfil=true;
		this.comentario=new Comentario("","","","","");
		this.publicacion= new Publicacion("","","","","");
		this.foto=new Foto("","","","","");
	}
	
	ngOnInit(){
		let stats=this.logservice.getIdentidad();
		if(stats==null){
			this._router.navigate(['/']);	
		}
		else{
			this.identida=stats;
		}
		this.obtenerPublicaciones();
	}

	obtenerPublicaciones(){
		console.log(this.identida._id)
		this.perfilservice.MisPublicaciones(this.identida._id).subscribe(
			Response=>{
				this.listPublicaciones=Response.publicaciones;
			},
			Error=>{
				console.log(<any>Error);
			});
	}

	publicarpost(){
		this.publicacion.user_id=this.identida._id;
		this.iniservice.publicar(this.publicacion).subscribe(
			Response=>{
				this.publicacion=Response.publicacion;
				this.obtenerPublicaciones();
			},
			Error=>{

			});
				if(this.filefoto){
					console.log("entro");
					this.foto.publicaion_id=this.publicacion._id;
					this.foto.user_id=this.identida._id;
					this.iniservice.publicarfoto(this.foto,this.filefoto,this.identida._id).subscribe(
						Response=>{
							console.log("exito");	
						},
						Error=>{
							console.log(<any>Error);
						});
				}
		this.publicacion= new Publicacion("","","","","");
	}

	enviarComentario(publicacion_id){
		this.comentario.user_id=this.identida._id;
		this.comentario.publicacion_id=publicacion_id;

		this.iniservice.publicarComentario(this.comentario).subscribe(
			Response=>{
				console.log("exito");

			},
			Error=>{
				console.log(<any>Error);
			});
	}
}