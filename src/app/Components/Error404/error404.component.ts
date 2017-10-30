import { Component } from '@angular/core';

@Component({
	selector:'Error404',
	templateUrl: './error404.component.html'
})
export class Error404Component{
	public titulo;
	
	constructor(){
		this.titulo='Error 404';
	}

}