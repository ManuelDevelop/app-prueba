import { Component } from '@angular/core';

@Component({
	selector:'Inicio',
	templateUrl: './inicio.component.html',
	styleUrls:['./inicio.component.css']
})
export class InicioComponent{
	public titulo;
	
	constructor(){
		this.titulo='este es el inicio';
	}

}