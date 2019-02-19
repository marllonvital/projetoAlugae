import { Component, OnInit } from '@angular/core';
import { LoginService } from '../../service/login.service'

import {LoginService} from '../../service/login.service';



@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  usuario_login:any[]=[];

  constructor(private loginService:LoginService) { }

  ngOnInit() {
  }

  save(addForm) {
    let usuario = addForm.value;
    this.loginService.postLogin(usuario).subscribe(
      res => {
        console.log(res);
        this.usuario_login.push({
          email:usuario.email_usuario,
          password:usuario.senha_usuario,
        })
      }
    )
  }
}
