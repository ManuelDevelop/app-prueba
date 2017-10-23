import { Component } from '@angular/core';

@Component({
	selector:'Registro',
	templateUrl: './registro.component.html',
	styleUrls:['./registro.component.css']
})
export class RegistroComponent{
	public titulo;
	
	constructor(){
		this.titulo='este es el Registro';
	}

}