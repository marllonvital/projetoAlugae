import { Component, OnInit } from '@angular/core';
import { MaterializeAction } from 'angular2-materialize';

import {CadastroUsuarioService} from '../../service/cadastro-usuario.service';

@Component({
  selector: 'app-cadastro-usuario',
  templateUrl: './cadastro-usuario.component.html',
  styleUrls: ['./cadastro-usuario.component.css']
})
export class CadastroUsuarioComponent implements OnInit {

  usuarios: any[]=[];

  constructor(private cadastroUsuarioService:CadastroUsuarioService) { }

  ngOnInit() {
  }
  save(addForm) {
    let usuario = addForm.value;
    this.cadastroUsuarioService.addUsuario(usuario).subscribe(
      res => {
        console.log(res);
        this.usuarios.push({
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
        })
      }
    )
  }
}
