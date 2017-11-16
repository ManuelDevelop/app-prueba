import { Component,OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { LoginService } from '../../services/login.service';
import { User } from '../../models/user';

@Component({
	selector:'Perfil',
	templateUrl: './perfil.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/dist/css/skins/_all-skins.min.css',
	'../../../ExtraMario/css/stylePC.css'
	],
	providers:[LoginService]
})
export class PerfilComponent implements OnInit{

	public identida: User;

	constructor(
		private logservice: LoginService,
		private _route:ActivatedRoute,
		private _router:Router
		){}
	
	ngOnInit(){
		let stats=this.logservice.getIdentidad();
		if(stats==null){
			this._router.navigate(['/']);	
		}
		else{
			this.identida=stats;
		}
	}
}