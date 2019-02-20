import { Injectable } from '@angular/core';
import { canActivate, ActivatedRouteSnapshot, RouterStateSnapshot, UrlTree, Router } from '@angular/router';
import { Observable } from 'rxjs';
import { AuthService } from '../service/auth.service';

@Injectable({
  providedIn: 'root'
})
export class AuthGuard implements CanActivate  {

  usuario_logado:any[]=[];
  logado:boolean = null;

  constructor(private authService:AuthService, private router:Router){}

  canActivate(next: ActivatedRouteSnapshot, state: RouterStateSnapshot): Observable<boolean> | Promise<boolean> | boolean{
    console.log('guarda ativado');
    //this.isAuthentic(); apanhei demais durante horas pra função assíncrona e to sem tempo pra fazer bonitinho
    return this.isLoged();

  }

  isLoged(){
    let token = localStorage.getItem('token');
    if (token != null){
      return true;
    } else{
      return false;
    }
  }

  // isAuthentic(): Observable<boolean>{
  //   let token = localStorage.getItem('token');
  //
  //   token = 'Bearer ' + token;
  //   this.authService.authToken(token).subscribe(
  //     res=> {
  //       this.usuario_logado.push({
  //         id:this.usuario_logado.id_usuario,
  //         name:this.usuario_logado.nome_usuario,
  //         cep:this.usuario_logado.cep_usuario,
  //         cpf:this.usuario_logado.cpf_usuario,
  //         password:this.usuario_logado.senha_usuario,
  //         c_password:this.usuario_logado.senha_usuario_repete,
  //         email:this.usuario_logado.email_usuario,
  //         city:this.usuario_logado.cidade_usuario,
  //         telephone:this.usuario_logado.telefone_usuario,
  //         number:this.usuario_logado.numero_residencia_usuario,
  //         complement:this.usuario_logado.complemento_residencia_usuario
  //       });
  //       localStorage.setItem('nome', res.succes.name);
  //       localStorage.setItem('id', res.succes.id);
  //
  //     }
  //   )
  // }

}
