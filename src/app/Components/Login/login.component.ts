import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { User } from '../../models/user';
import { LoginService } from '../../services/login.service';

@Component({
	selector:'Login',
	templateUrl: './login.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/Plugins/iCheck/square/blue.css',
	'../../../ExtraMario/css/styleIni.css'
	],
	providers:[ LoginService ]
})
export class LoginComponent implements OnInit{
	
	public user: User;
	public identida: User;
	public status: string;

	constructor(
		private logservice: LoginService,
		private route:ActivatedRoute,
		private router:Router
		){
		this.user=new User("","","","","","","","","");
	}

	ngOnInit(){
		let stats=this.logservice.getIdentidad();
		if(stats==null){
			this.status="Error";
		}
		else{
			this.status="Exito";
		}
	}

	enviarLogin(){
		this.logservice.singup(this.user).subscribe(
			Response=>{
				this.identida=Response.users;
				this.identida.pass="";

				if(!this.identida || !this.identida._id){
					alert("Incorrecto");
					this.status="Error";
					localStorage.removeItem('identidadICO');
				}
				else{
					this.status="Exito";
					this.user.pass="";
					localStorage.setItem('identidadICO',JSON.stringify(this.identida));
					this.router.navigate(['/inicio']);
				}
			},
			Error=>{
				this.status="Error";
				this.user.pass="";
				localStorage.removeItem('identidadICO');
			}
			);
	}
}