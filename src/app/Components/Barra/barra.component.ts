import { Component } from '@angular/core';
import { Router, ActivatedRoute, Params } from '@angular/router';

@Component({
	selector:'Barra',
	templateUrl: './barra.component.html'
})
export class BarraComponent{

	constructor(
		private _route:ActivatedRoute,
		private _router:Router
		){}

	logout(){
		localStorage.removeItem('identidadICO');
		this._router.navigate(['/login']);
	}
}