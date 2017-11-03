import { Component } from '@angular/core';
import { User } from '../../models/user';
import { GLOBAL } from '../../services/global'
import { RegistroService } from '../../services/registro.service'

@Component({
	selector:'Registro',
	templateUrl: './registro.component.html',
	styleUrls:[
	'../../../ExtraMario/dist/css/AdminLTE.css',
	'../../../ExtraMario/Plugins/iCheck/square/blue.css',
	'../../../ExtraMario/css/styleIni.css'
	],
	providers:[RegistroService]
})
export class RegistroComponent{

	public user: User;
	public message: string;
	
	constructor(
		private _registroService: RegistroService
		){
		this.user= new User('','','','','','','','','');
	}

	enviardatos(){
		this._registroService.register(this.user).subscribe(
			Response=>{
				if(Response.user){
					this.user= new User('','','','','','','','','');
					this.message="Exito";
				}else{
					this.message="Error";
				}
			},
			error=>{
				console.log(<any>error);
			}
			)
	}
}