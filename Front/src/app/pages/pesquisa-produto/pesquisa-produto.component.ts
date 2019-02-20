import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router} from '@angular/router';
import {PesquisaProdutoService } from '../../service/pesquisa-produto.service';

@Component({
  selector: 'app-pesquisa-produto',
  templateUrl: './pesquisa-produto.component.html',
  styleUrls: ['./pesquisa-produto.component.css']
})
export class PesquisaProdutoComponent implements OnInit {

  constructor(private pesquisaProdutoService: PesquisaProdutoService,
    private route: ActivatedRoute,
    private router: Router) { }

  ngOnInit() {
    this.route.queryParams.subscribe(
      query =>{
        this.pesquisaProdutoService.getProduto(this.nomeInput).subscribe(
          res=>{
            console.log(res);
            this.produto = res;
          },
          error =>{
            this.error = true;
          }
        );
        this.currentPage = query['page']
      }
    )
  }

}
