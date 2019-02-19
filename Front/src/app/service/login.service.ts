import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class LoginService {

	apiUrl = "http://localhost:8000/api/login";



  constructor ( private http: HttpClient ) { }

	getLogin(): Observable<any> {
		return this.http.get( this.apiUrl ).pipe( map( res=>res ) );
  }
}
