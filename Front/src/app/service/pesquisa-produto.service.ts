import { Injectable } from '@angular/core';

import { HttpClient } from '@angular/common/http';
import { map } from "rxjs/operators";
import { Observable } from 'rxjs';



@Injectable({
  providedIn: 'root'
})
export class PesquisaProdutoService {

  apiUrl="http://localhost:8000/api/get-product/";

  constructor(public http:HttpClient) { }

  getProduto(nomeInput: string): Observable<any>{
    console.log(nomeInput);
    return this.http.get(this.apiUrl + nomeInput).pipe(map(res => res));
  }
}
