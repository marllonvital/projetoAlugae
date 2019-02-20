import { Component, OnInit } from '@angular/core';
import { MaterializeDirective, MaterializeAction } from "angular2-materialize";
import { EventEmitter } from "@angular/core"

@Component({
  selector: 'app-produto',
  templateUrl: './produto.component.html',
  styleUrls: ['./produto.component.css']
})
export class ProdutoComponent implements OnInit {

  modalActions = new EventEmitter<string|MaterializeAction>();

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
