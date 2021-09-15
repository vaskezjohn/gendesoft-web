import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-contacto',
  templateUrl: './contacto.component.html',
  styleUrls: ['./contacto.component.css']
})
export class ContactoComponent {

   nombreIn:string;
   emailIn:string;
   mensajeIn:string;

    miFuncion(nombre:string,correo:string,mensaje:string){
        this.nombreIn=nombre;
        this.emailIn=correo;
        this.mensajeIn=mensaje;
    } 



}
