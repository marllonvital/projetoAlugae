import { Component, OnInit } from '@angular/core';
import { AuthGuard } from './../../guards/auth.guard';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

  perfil_default:string = "../../../assets/img/perfil_provisorio/perfil_provisorio2.jpg";
  logado = this.authGuard.isLoged();

  constructor(private authGuard:AuthGuard) { }

  ngOnInit() {
  }

}
