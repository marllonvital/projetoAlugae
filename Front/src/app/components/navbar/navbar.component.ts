import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router} from '@angular/router';
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

  constructor( private pesquisaProdutoService: PesquisaProdutoService,
     private route: ActivatedRoute,
     private router: Router) { }

  ngOnInit() {

  }

  changePage(){
    console.log(this.nomeInput);
    this.router.navigate(['pesquisa-produto'],{queryParams: {name: this.nomeInput}});
  }

  logado(){
    pass;
  }
}
