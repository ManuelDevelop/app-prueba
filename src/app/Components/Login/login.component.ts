import { Component,OnInit,DoCheck} from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { User } from '../../models/user';
import { GLOBAL } from '../../services/global';
import { LoginService } from '../../services/login.service';


@Component({
	selector:'Login',
	templateUrl: './login.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/Plugins/iCheck/square/blue.css',
	'../../../ExtraMario/css/styleIni.css'
	],
	providers:[LoginService]
})
export class LoginComponent implements OnInit{

	public user:User;
	public identidad:User;
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
		this.status="";
	}

	loguear(){
		this.loginservice.loguear(this.user).subscribe(
			response=>{
				this.identidad=response.users;
				if(!this.identidad || !this.identidad._id){
					alert("No se pudo Acceder");	
				}
				else{
					this.identidad.pass="";
					localStorage.setItem('identidadICO',JSON.stringify(this.identidad));
					this._router.navigate(['/inicio']);
				}
				this.user=new User("","","","","","","","","");
			},
			error=>{
				this.status="false";
				console.log(<any>error);
			}
			);
	}
}