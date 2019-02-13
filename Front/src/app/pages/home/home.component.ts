import { Component, OnInit } from '@angular/core';

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
  constructor() { }

  ngOnInit() {
  }

}
