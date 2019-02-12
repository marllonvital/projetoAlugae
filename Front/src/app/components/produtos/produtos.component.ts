import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-produtos',
  templateUrl: './produtos.component.html',
  styleUrls: ['./produtos.component.css']
})
export class ProdutosComponent implements OnInit {
  produto: any[]=[
    {nome: "Super Nintendo ",
     preco: 100,
     ul: "assets/img/produto_defaut/defaut.png"}
  ];
  constructor() { }


  ngOnInit() {
  }

}
