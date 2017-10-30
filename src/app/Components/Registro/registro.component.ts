import { Component } from '@angular/core';

@Component({
	selector:'Registro',
	templateUrl: './registro.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/Plugins/iCheck/square/blue.css',
	'../../../ExtraMario/css/styleIni.css'
	] 
})
export class RegistroComponent{
	public titulo;
	
	constructor(){
		this.titulo='este es el Registro';
	}

}