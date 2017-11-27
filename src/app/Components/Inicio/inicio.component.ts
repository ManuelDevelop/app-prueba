import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { User } from '../../models/user';
import { Publicacion } from '../../models/publicacion';
import { Comentario } from '../../models/comentarios';
import { Foto } from '../../models/fotos';
import { LoginService } from '../../services/login.service';
import { InicioService } from '../../services/inicio.service';
import { GLOBAL } from '../../services/global';

@Component({
	selector:'Inicio',
	templateUrl: './inicio.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/dist/css/skins/_all-skins.min.css',
	'../../../ExtraMario/css/component.css',
	'../../../ExtraMario/css/stylePC.css'
	],
	providers:[ LoginService,InicioService ]
})

export class InicioComponent implements OnInit{

	public identida: User;
	public publicacion: Publicacion;
	public comentario:Comentario;
	public foto: Foto;
	public url:String;
	public filefoto;
	public listpublicaciones:Publicacion[];

	constructor(
			private logservice: LoginService,
			private iniservice: InicioService,
			private route:ActivatedRoute,
			private router:Router
		){
		this.url=GLOBAL.url;
		this.publicacion= new Publicacion("","","","","");
		this.foto=new Foto("","","","","");
		this.comentario=new Comentario("","","","","");
	}

	ngOnInit(){
		let stats=this.logservice.getIdentidad();
		if(stats==null){
			this.router.navigate(['/']);	
		}
		else{
			this.identida=stats;
		}	
		this.listarPublicaciones();	
	}


	publicarpost(){
		this.publicacion.user_id=this.identida._id;
		this.iniservice.publicar(this.publicacion).subscribe(
			Response=>{
				this.publicacion=Response.publicacion;
				this.publicacion= new Publicacion("","","","","");
				this.listarPublicaciones();
			},
			Error=>{
				this.publicacion= new Publicacion("","","","","");
			});
	}

	listarPublicaciones(){
		this.iniservice.getPublicaciones().subscribe(
			Response=>{
				this.listpublicaciones=Response.publicaciones;
			},
			Error=>{
				console.log(<any>Error);
			});
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
		this.comentario=new Comentario("","","","","");
	}
}