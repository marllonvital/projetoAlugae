import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import{HomeComponent} from './pages/home/home.component';
import{SobreComponent} from './pages/sobre/sobre.component';
import{LoginComponent} from './pages/login/login.component';
import{ProdutosComponent} from './components/produtos/produtos.component';
import { CadastroUsuarioComponent } from './pages/cadastro-usuario/cadastro-usuario.component';
import { CadastroProdutoComponent } from './pages/cadastro-produto/cadastro-produto.component';
import{PerfilComponent} from './pages/perfil/perfil.component';
const routes: Routes = [

    {path: 'home', component: HomeComponent},
    {path: 'sobre', component: SobreComponent},
    {path: 'login', component: LoginComponent},
    {path: 'perfil', component: PerfilComponent},
    {path:'cadastro-usuario',component: CadastroUsuarioComponent},
    {path:'cadastro-produto',component: CadastroProdutoComponent},
    {path: '',redirectTo: '/home',pathMatch: 'full'}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
