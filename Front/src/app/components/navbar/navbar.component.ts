import { Component, OnInit } from '@angular/core';
import { AuthService } from './../../service/auth.service';

import {PesquisaProdutoService } from '../../service/pesquisa-produto.service';
@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
})
export class NavbarComponent implements OnInit {
  produto:any;
  placeholderValue: string = "Ex: Super Nintento";
  nomeInput: string = "";
  error: boolean = false;
  perfil_default:string = "../../../assets/img/perfil_provisorio/perfil_provisorio2.jpg";
  logado = this.authService.isLoged();

  constructor(private authService:AuthService, public pesquisaProdutoService: PesquisaProdutoService) {
  }

  ngOnInit() {
  }

  onSubmit(){
    this.error=false;
    console.log(this.nomeInput);
    this.pesquisaProdutoService.getProduto(this.nomeInput).subscribe(
      res=>{
        console.log(res);
        this.produto = res;
      },
      error =>{
        this.error = true;
      }
    );
  }

}
