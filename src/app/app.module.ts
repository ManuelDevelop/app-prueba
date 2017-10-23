import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { routing, appRoutingProviders} from './app.routing';

//Importamos los componentes
import { AppComponent } from './app.component';
import { InicioComponent } from './Components/Inicio/inicio.Component';
import { LoginComponent } from './Components/Login/login.Component';
import { MensajesComponent } from './Components/Mensajes/mensajes.Component';
import { PerfilComponent } from './Components/Perfil/perfil.Component';
import { RegistroComponent } from './Components/Registro/registro.Component';
import { Error404Component } from './Components/Error404/error404.Component';
import { BarraComponent } from './Components/Barra/barra.Component';

@NgModule({
  declarations: [
    AppComponent,
    InicioComponent,
    LoginComponent,
    MensajesComponent,
    PerfilComponent,
    RegistroComponent,
    Error404Component,
    BarraComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    routing
  ],
  providers: [
    appRoutingProviders
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
