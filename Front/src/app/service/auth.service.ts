import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';


@Injectable({
  providedIn: 'root'
})
export class AuthService {

  apiUrl = "http://localhost:8000/api/get-details";

  constructor( private http: HttpClient) { }

  authToken(token:string): Observable<any> {
    let headers:HttpHeaders = new HttpHeaders({'Authorization': token});
    console.log(headers);
    return this.http.get(this.apiUrl, {headers}).pipe(map(res => res));
  }
}
