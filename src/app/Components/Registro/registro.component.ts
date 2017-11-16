import { Component,OnInit,DoCheck } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { User } from '../../models/user';
import { GLOBAL } from '../../services/global';
import { LoginService } from '../../services/login.service';



@Component({
	selector:'Registro',
	templateUrl: './registro.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/Plugins/iCheck/square/blue.css',
	'../../../ExtraMario/css/styleIni.css'
	],
	providers:[LoginService]
})
export class RegistroComponent implements OnInit{

	public user:User;
	public status:string;

	constructor(
		private _route:ActivatedRoute,
		private _router:Router,
		private loginservice:LoginService
		){
		this.user=new User("","","","","","","","","");
	}
	
	ngOnInit(){
		console.log("OnInit de login");
		this.status=null;
	}

	enviarRegistro(){
		this.loginservice.loguear(this.user).subscribe(
			response=>{
				if(response.user && response.user._id){
					this.status='true';
				}
				else{
					this.status='false';
				}
				this.user=new User("","","","","","","","","");
			},
			error=>{
				console.log(<any>error);
			}
			);
	}
}