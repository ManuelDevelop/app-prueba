import { Component,OnInit,DoCheck } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { GLOBAL } from './services/global';
import { LoginService } from './services/login.service';

@Component({
  selector: 'app-root',
  templateUrl:'./app.component.html',
  providers:[LoginService]
})

export class AppComponent implements OnInit,DoCheck{
	public log: boolean;
	public identidad;

	constructor(
		private loginservice:LoginService,
		private route:ActivatedRoute,
		private router:Router
		){}

	ngOnInit(){
		this.identidad=this.loginservice.getIdentidad();
		if(this.identidad==null){
			this.log=false;
		}
		else{
			this.log=true;
			this.router.navigate(['/inicio']);
		}
	}

	ngDoCheck(){
		this.identidad=this.loginservice.getIdentidad();
		if(this.identidad==null){
			this.log=false;
		}
		else{
			this.log=true;
		}
	}
}