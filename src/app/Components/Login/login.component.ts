import { Component } from '@angular/core';

@Component({
	selector:'Login',
	templateUrl: './login.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/Plugins/iCheck/square/blue.css',
	'../../../ExtraMario/css/styleIni.css'
	]
})
export class LoginComponent{
	public titulo: String;

	constructor(){
		this.titulo='este es el login';
	}
}