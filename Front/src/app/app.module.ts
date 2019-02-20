import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { MaterializeModule } from 'angular2-materialize';
import { AppRoutingModule } from './app-routing.module';
import { HttpClientModule } from '@angular/common/http'
import { FormsModule} from '@angular/forms';

// Service
import { CadastroProdutoService} from './service/cadastro-produto.service';
import { CadastroUsuarioService} from './service/cadastro-usuario.service';
import { LoginService} from './service/login.service';
import { AuthService } from './service/auth.service';


// Component
import { AppComponent } from './app.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { LoginComponent } from './pages/login/login.component';
import { HomeComponent } from './pages/home/home.component';
import { ProdutosComponent } from './components/produtos/produtos.component';
import { SobreComponent } from './pages/sobre/sobre.component';
import { CadastroUsuarioComponent } from './pages/cadastro-usuario/cadastro-usuario.component';
import { CadastroProdutoComponent } from './pages/cadastro-produto/cadastro-produto.component';
import { PerfilComponent } from './pages/perfil/perfil.component';
import { ProdutoComponent } from './pages/produto/produto.component';
import { CategoriaCozinhaComponent } from './pages/categoria-cozinha/categoria-cozinha.component';
import { CategoriaLivroComponent } from './pages/categoria-livro/categoria-livro.component';
import { CategoriaEletronicoComponent } from './pages/categoria-eletronico/categoria-eletronico.component';

//Guardas
import { AuthGuard } from './guards/auth.guard';





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
    CategoriaCozinhaComponent,
    CategoriaLivroComponent,
    CategoriaEletronicoComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    MaterializeModule,
    HttpClientModule,
    FormsModule,
  ],
  providers: [
    HttpClientModule,
    LoginService,
    CadastroProdutoService,
    CadastroUsuarioService,
    AuthService,
    AuthGuard,
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
