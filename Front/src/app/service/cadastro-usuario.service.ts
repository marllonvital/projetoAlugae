import { Injectable } from '@angular/core';

import { HttpClient} from '@angular/common/http';
import {map} from "rxjs/operators";
import { Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CadastroUsuarioService {

    apiUrl = "http://localhost:8000/api/register";

  constructor(private http:HttpClient) { }

  addUsuario(usuario:any):Observable<any>{
    return this.http.post(this.apiUrl,{
      name:usuario.nome_usuario,
      cep:usuario.cep_usuario,
      cpf:usuario.cpf_usuario,
      password:usuario.senha_usuario,
      c_password:usuario.senha_usuario_repete,
      email:usuario.email_usuario,
      city:usuario.cidade_usuario,
      telephone:usuario.telefone_usuario,
      number:usuario.numero_residencia_usuario,
      complement:usuario.complemento_residencia_usuario
    }).pipe(map(res => res));
  }
}
