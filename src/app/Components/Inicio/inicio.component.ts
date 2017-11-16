import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { User } from '../../models/user';
import { Publicacion } from '../../models/publicacion';
import { Foto } from '../../models/fotos';
import { LoginService } from '../../services/login.service';
import { InicioService } from '../../services/inicio.service';

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
	public foto: Foto;
	public filefoto;

	constructor(
			private logservice: LoginService,
			private iniservice: InicioService,
			private route:ActivatedRoute,
			private router:Router
		){
		this.publicacion= new Publicacion("","","","");
		this.foto=new Foto("","","","","");
	}

	ngOnInit(){
		let stats=this.logservice.getIdentidad();
		if(stats==null){
			this.router.navigate(['/']);	
		}
		else{
			this.identida=stats;
		}
	}

	publicarpost(){
		this.publicacion.user_id=this.identida._id;
		this.iniservice.publicar(this.publicacion).subscribe(
			Response=>{
				this.publicacion=Response.publicacion;
			},
			Error=>{

			});
				if(this.filefoto){
					console.log("entro");
					this.foto.publicaion_id=this.publicacion._id;
					this.foto.user_id=this.identida._id;
					this.iniservice.publicarfoto(this.foto,this.filefoto,this.identida._id).subscribe(
						Response=>{
							let photo=Response;
						},
						Error=>{

						});
				}
	}
}