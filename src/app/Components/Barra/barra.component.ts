import { Component } from '@angular/core';

@Component({
	selector:'Barra',
	templateUrl: './barra.component.html'
})
export class BarraComponent{
	public titulo;
	
	constructor(){
		this.titulo='este es la barra';
	}

}