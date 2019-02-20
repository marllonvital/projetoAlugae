import { Component, OnInit } from '@angular/core';
import { LoginService } from '../../service/login.service';
import { AuthService } from '../../service/auth.service';




@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  usuario_login:any[]=[];

  constructor(private loginService:LoginService, private authService:AuthService) { }

  ngOnInit() {
  }

  save(addForm) {
    let usuario = addForm.value;
    this.loginService.postLogin(usuario).subscribe(
      res => {
        console.log(res.success.token);
        localStorage.setItem('token', res.success.token);
        this.getInformation()
      }
    )
  }

  getInformation(): Observable<boolean>{
    let token = localStorage.getItem('token');
    token = 'Bearer ' + token;
    this.authService.authToken(token).subscribe(
      res=> {
        console.log(res);
        localStorage.setItem('nome', res.success.name);
        localStorage.setItem('id', res.success.id);
      }
    )
  }
}
