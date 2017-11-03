import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { LoginService } from '../../services/login.service';

@Component({
	selector:'Perfil',
	templateUrl: './perfil.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/dist/css/skins/_all-skins.min.css',
	'../../../ExtraMario/css/stylePC.css'
	]
})
export class PerfilComponent implements OnInit{
	
	
	constructor(
			private logservice: LoginService,
			private route:ActivatedRoute,
			private router:Router
		){}

	ngOnInit(){
		let stats=this.logservice.getIdentidad();
		if(stats==null){
			this.router.navigate(['/']);	
		}
	}

}