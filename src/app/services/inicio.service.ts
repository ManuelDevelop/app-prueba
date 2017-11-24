import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import { Observable } from 'rxjs/Observable';
import { GLOBAL } from './global';

@Injectable()
export class InicioService{
	public url: string;

	constructor(private http:Http){
		this.url=GLOBAL.url;
	}

	publicar(public_to_post){
		let params= JSON.stringify(public_to_post);
		let headers= new Headers({'Content-Type':'application/json'});

		return this.http.post(this.url+'publicacion',params,{headers:headers}).map(res => res.json());
	}

	publicarfoto(foto_to_db,file_to_post,userid){
		let params= JSON.stringify(file_to_post,foto_to_db,userid);
		let headers= new Headers({'Content-Type':'application/json'});

		return this.http.post(this.url+'avatar/'+userid,params,{headers:headers}).map(res => res.json());
	}

	getPublicaciones(){
		return this.http.get(this.url+'publicacion').map(res=>res.json());
	}

	publicarComentario(comentario_to_post){
		let params= JSON.stringify(comentario_to_post);
		let headers= new Headers({'Content-Type':'application/json'});

		return this.http.post(this.url+'comentario',params,{headers:headers}).map(res => res.json());
	}
}