import { Component, OnInit } from '@angular/core';

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

  constructor( public pesguisaProdutoService: PesquisaProdutoService) { }

  ngOnInit() {
  }

  onSubmit(){
    this.error=false;
    console.log(this.nomeInput);
    this.pesguisaProdutoService.getProduto(this.nomeInput).subscribe(
      res=>{
        console.log(res);
        this.produto = res;
      },
      error =>{
        this.error = true;
      }
    );
  }

  logado(){
    pass;
  }
}
