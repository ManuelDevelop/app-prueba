import { Component } from '@angular/core';

@Component({
	selector:'Perfil',
	templateUrl: './perfil.component.html',
	styleUrls:[
	'../../../ExtraMario/bootstrap/css/bootstrap.min.css',
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/dist/css/skins/_all-skins.min.css',
	'../../../ExtraMario/css/stylePC.css'
	]
})
export class PerfilComponent{
	public titulo;
	
	constructor(){
		this.titulo='este es el Perfil';
	}

}