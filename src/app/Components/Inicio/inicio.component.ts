import { Component } from '@angular/core';

@Component({
	selector:'Inicio',
	templateUrl: './inicio.component.html',
	styleUrls:[
	'../../../ExtraMario/bootstrap/css/bootstrap.min.css',
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/dist/css/skins/_all-skins.min.css',
	'../../../ExtraMario/css/component.css',
	'../../../ExtraMario/css/stylePC.css'
	]
})
export class InicioComponent{
	public titulo;
	
	constructor(){
		this.titulo='este es el inicio';
	}

}