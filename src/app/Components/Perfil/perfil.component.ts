import { Component } from '@angular/core';

@Component({
	selector:'Perfil',
	templateUrl: './perfil.component.html',
	styleUrls:['./perfil.component.css']
})
export class PerfilComponent{
	public titulo;
	
	constructor(){
		this.titulo='este es el Perfil';
	}

}