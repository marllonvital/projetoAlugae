import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import{HomeComponent} from './pages/home/home.component';
import{SobreComponent} from './pages/sobre/sobre.component';
import{LoginComponent} from './pages/login/login.component';
import{ProdutoComponent} from './pages/produto/produto.component';
import{ProdutosComponent} from './components/produtos/produtos.component';
import { CadastroUsuarioComponent } from './pages/cadastro-usuario/cadastro-usuario.component';
import { CadastroProdutoComponent } from './pages/cadastro-produto/cadastro-produto.component';
import { CategoriaCozinhaComponent } from './pages/categoria-cozinha/categoria-cozinha.component';
import { CategoriaLivroComponent } from './pages/categoria-livro/categoria-livro.component';
import { CategoriaEletronicoComponent } from './pages/categoria-eletronico/categoria-eletronico.component';
import {PerfilComponent} from './pages/perfil/perfil.component';
import {PesquisaProdutoComponent} from './pages/pesquisa-produto/pesquisa-produto.component';

import { AuthGuard } from './guards/auth.guard';

const routes: Routes = [

    {path: 'home', component: HomeComponent},
    {path: 'sobre', component: SobreComponent},
    {path: 'login', component: LoginComponent},
    {path: 'perfil', component: PerfilComponent},
    {path:'produto',component: ProdutoComponent},
    {path:'pesquisa-produto',component: PesquisaProdutoComponent},
    {path:'categoria-cozinha',component: CategoriaCozinhaComponent},
    {path:'categoria-livro',component: CategoriaLivroComponent},
    {path:'categoria-eletronico',component: CategoriaEletronicoComponent},
    {path:'cadastro-usuario',component: CadastroUsuarioComponent},
    {path:'cadastro-produto',component: CadastroProdutoComponent},
    {path: '',redirectTo: '/home',pathMatch: 'full'}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
