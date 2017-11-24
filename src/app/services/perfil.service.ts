import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import { Observable } from 'rxjs/Observable';
import { GLOBAL } from './global';

@Injectable()
export class PerfilService{
	public url: string;

	constructor(private http:Http){
		this.url=GLOBAL.url;
	}

	MisPublicaciones(user_id){
		return this.http.get(this.url+'publicaciones/'+user_id).map(res=>res.json());
	}
}