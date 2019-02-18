import { Injectable } from '@angular/core';

import { HttpClient} from '@angular/common/http';
import {map} from "rxjs/operators";
import { Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CadastroProdutoService {

  apiUrl = "http://localhot:8000/api/product-add";



  constructor(private http: HttpClient) { }

  addProduto(produto: any): Observable<any>{
    return this.http.post(this.apiUrl,{
      name:produto.nome_produto,
      description:produto.descricao_produto,
      price:produto.preco_diaria,
      type:produto.tipo,
      brand:produto.produto_marca,
      photo:produto.imagem_submit
    }).pipe(map(res => res));
  }
}
