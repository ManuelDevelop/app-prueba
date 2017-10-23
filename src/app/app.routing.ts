//importamos las librerias
import { ModuleWithProviders } from '@angular/core';
import { Routes,RouterModule } from '@angular/router';

//importamos los componentes que formaran parte

import { AppComponent } from './app.component';
import { InicioComponent } from './Components/Inicio/inicio.Component';
import { LoginComponent } from './Components/Login/login.Component';
import { MensajesComponent } from './Components/Mensajes/mensajes.Component';
import { PerfilComponent } from './Components/Perfil/perfil.Component';
import { RegistroComponent } from './Components/Registro/registro.Component';
import { Error404Component } from './Components/Error404/error404.Component';
import { BarraComponent } from './Components/Barra/barra.Component';


//definimos las rutas
const appRoutes:Routes=[
	//inicio de la app
	{path:'',component: LoginComponent},
	//primera pantalla
	{path:'',redirectTo: 'login',pathMatch: 'full'},
	//Las demas rutas
	{path:'login',component: LoginComponent},
	{path:'inicio',component: InicioComponent},
	{path:'mensajes',component: MensajesComponent},
	{path:'perfil',component: PerfilComponent},
	{path:'registro',component: RegistroComponent},
	//Cuando falle
	{path:'**',component: Error404Component}
];

//exportamos este archivoa
export const appRoutingProviders: any[]=[];
export const routing: ModuleWithProviders=RouterModule.forRoot(appRoutes);