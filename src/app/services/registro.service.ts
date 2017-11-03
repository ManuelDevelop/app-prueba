import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import { Observable } from 'rxjs/Observable';
import { GLOBAL } from './global';

@Injectable()
export class RegistroService{
	public url: string;

	constructor(private http:Http){
		this.url=GLOBAL.url;
	}

	register(user_to_register){
		let params= JSON.stringify(user_to_register);
		let headers= new Headers({'Content-Type':'application/json'});

		return this.http.post(this.url+'user',params,{headers:headers}).map(res => res.json());
	}
}