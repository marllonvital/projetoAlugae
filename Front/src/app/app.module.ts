import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http'


import { MaterializeModule } from 'angular2-materialize';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { LoginComponent } from './pages/login/login.component';
import { HomeComponent } from './pages/home/home.component';
import { ProdutosComponent } from './components/produtos/produtos.component';
import { SobreComponent } from './pages/sobre/sobre.component';
import { CadastroUsuarioComponent } from './pages/cadastro-usuario/cadastro-usuario.component';
import { LoginService } from './service/login.service';
import { CadastroProdutoComponent } from './pages/cadastro-produto/cadastro-produto.component';
import { PerfilComponent } from './pages/perfil/perfil.component';
import { ProdutoComponent } from './pages/produto/produto.component';




@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    FooterComponent,
    LoginComponent,
    HomeComponent,
    ProdutosComponent,
    SobreComponent,
    CadastroUsuarioComponent,
    CadastroProdutoComponent,
    PerfilComponent,
    ProdutoComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    MaterializeModule,
    HttpClientModule,
  ],
  providers: [
    HttpClientModule,
    LoginService,
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
