import { Component } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';

@Component({
	selector:'Barra',
	templateUrl: './barra.component.html'
})
export class BarraComponent{
	
	
	constructor(
			private route:ActivatedRoute,
			private router:Router
		){
	}

	logout(){
		localStorage.removeItem('identidadICO');
		this.router.navigate(['/']);
	}

}