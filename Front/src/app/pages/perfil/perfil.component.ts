import { Component, OnInit } from '@angular/core';
import { MaterializeDirective, MaterializeAction } from "angular2-materialize";
import { EventEmitter } from "@angular/core"

@Component({
  selector: 'app-perfil',
  templateUrl: './perfil.component.html',
  styleUrls: ['./perfil.component.css']
})
export class PerfilComponent implements OnInit {

  modalActions = new EventEmitter<string|MaterializeAction>();
  nome_usuario = localStorage.getItem('nome');

  constructor() { }

  ngOnInit() {
  }

  abreModal(){
    this.modalActions.emit({action: "modal", params:['open']});
  }

  fechaModal(){
    this.modalActions.emit({action: "modal", params:['close']});
  }
}
