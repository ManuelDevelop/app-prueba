import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import { Observable } from 'rxjs/Observable';
import { GLOBAL } from './global';

@Injectable()
export class LoginService{
	public url: string;
	public identi;

	constructor(private http:Http){
		this.url=GLOBAL.url;
	}

	registrar(user_to_post){
		let params= JSON.stringify(user_to_post);
		let headers= new Headers({'Content-Type':'application/json'});

		return this.http.post(this.url+'user',params,{headers:headers}).map(res => res.json());
	}

	loguear(user_to_log){
		let params= JSON.stringify(user_to_log);
		let headers= new Headers({'Content-Type':'application/json'});

		return this.http.post(this.url+'login',params,{headers:headers}).map(res => res.json());
	}

	getIdentidad(){
		let identidad=JSON.parse(localStorage.getItem('identidadICO'));
		if(identidad != "undefined"){
			this.identi=identidad;
		}
		else{
			this.identi=null;
		}
		return this.identi;
	}
}