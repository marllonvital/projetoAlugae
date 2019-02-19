import { Component, OnInit } from '@angular/core';
import { MaterializeAction } from 'angular2-materialize';

import {CadastroProdutoService} from '../../service/cadastro-produto.service';

@Component({
  selector: 'app-cadastro-produto',
  templateUrl: './cadastro-produto.component.html',
  styleUrls: ['./cadastro-produto.component.css']
})
export class CadastroProdutoComponent implements OnInit {

  produtos: any[] = [];

  constructor(private cadastroProdutoService:CadastroProdutoService) { }

  ngOnInit() {
  }

  save(addForm) {
    let produto = addForm.value;
    this.cadastroProdutoService.addProduto(produto).subscribe(
      res => {
        console.log(res);
            this.produtos.push({
              name:produto.nome_produto,
              description:produto.descricao_produto,
              price:produto.preco_diaria,
              type:produto.tipo,
              brand:produto.produto_marca,
              photo:produto.imagem_submit
        })
      }
    )
  }
}
