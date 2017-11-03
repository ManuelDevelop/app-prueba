import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import { Observable } from 'rxjs/Observable';
import { GLOBAL } from './global';

@Injectable()
export class LoginService{
	public url: string;
	public identidad;

	constructor(private http:Http){
		this.url=GLOBAL.url;
	}

	singup(user_to_login){
		let params= JSON.stringify(user_to_login);
		let headers= new Headers({'Content-Type':'application/json'});

		return this.http.post(this.url+'login',params,{headers:headers}).map(res => res.json());
	}

	getIdentidad(){
		let identidad=JSON.parse(localStorage.getItem('identidadICO'));

		if(identidad != "undefined"){
			this.identidad=identidad;
		}
		else{
			this.identidad=null;
		}
		return this.identidad;
	}
}