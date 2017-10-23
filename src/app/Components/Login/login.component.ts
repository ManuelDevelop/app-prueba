import { Component } from '@angular/core';

@Component({
	selector:'Login',
	templateUrl: './login.component.html'
    //templateUrl: '../../ExtraMario/php/index.html'
})
export class LoginComponent{
	public titulo;
	public nCuenta: String;
	public pass: String;

	constructor(){
		this.titulo='este es el login';
		this.pass="";
		this.nCuenta="";
	}

	lfonSubmit(){
		console.log(this.pass);
		console.log(this.nCuenta);
	}
}