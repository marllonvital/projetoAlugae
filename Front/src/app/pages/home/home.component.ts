import { Component, OnInit, NgModule } from '@angular/core';
import {BrowserModule} from '@angular/platform-browser'



@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  produto: any[]=[
    {nome: "Nintento",
     preco: 100,
     ul: "assets/img/produto_defaut/defaut.png"}
  ];
  // card_cozinha = document.getElementById("cardCozinha");
  // card_livros = document.getElementById("cardLivros");
  // card_eletronicos = document.getElementById("cardEletronicos");

  constructor() { }

  ngOnInit() {
    // this.card_eletronicos.style.height=this.card_cozinha.style.height;
    // this.card_livros.style.height=this.card_cozinha.style.height;
  }

}
