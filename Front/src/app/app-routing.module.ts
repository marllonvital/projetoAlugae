import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import{HomeComponent} from './pages/home/home.component';
import{ProdutosComponent} from './components/produtos/produtos.component';

const routes: Routes = [

    { path: 'home', component: HomeComponent},
    {path: '',redirectTo: '/home',pathMatch: 'full'}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
