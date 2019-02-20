import { Injectable } from '@angular/core';

import { HttpClient, HttpHeaders} from '@angular/common/http';
import {map} from "rxjs/operators";
import { Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CadastroProdutoService {

  apiUrl = "http://localhost:8000/api/product-add";



  constructor(private http: HttpClient) { }

  addProduto(produto: any): Observable<any>{
    let token = localStorage.getItem('token')
    token = 'Bearer ' + token;
    console.log(token);
    let headers:HttpHeaders = new HttpHeaders({'Authorization': token});
    console.log(headers);
    return this.http.post(this.apiUrl,{
      name:produto.nome_produto,
      description:produto.descricao_produto,
      price:produto.preco_diaria,
      type:produto.tipo,
      brand:produto.produto_marca,
      photo:produto.imagem_submit
    }, {headers} ).pipe(map(res => res));
  }
}
