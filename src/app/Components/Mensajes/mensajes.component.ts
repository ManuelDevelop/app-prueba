import { Component } from '@angular/core';

@Component({
	selector:'Mensajes',
	templateUrl: './mensajes.component.html'
})
export class MensajesComponent{
	public titulo;
	
	constructor(){
		this.titulo='este es el mensajes';
	}

}