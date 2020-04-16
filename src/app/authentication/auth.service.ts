import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

declare var $: any;

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(
    private http: HttpClient
  ) { }

  getToken(body){
    let httpOptions = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
        'Authorization': ''
      })
    }
    return this.http.post('/oauth/token', body, httpOptions);
  }

  
  Login(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/user', body, httpOptions);
  }


  Logout(body){
     let httpOptions = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
        'Authorization': JSON.parse(localStorage.getItem('xenoElement'))
      })
    }
    return this.http.post('', body, httpOptions);
  }


  register(body){
     let httpOptions = {
      headers: new HttpHeaders({
        'Content-Type':  'application/json',
        'Authorization': 'my-auth-token'
      })
    }
  
    return this.http.post('/api/users/register', body, httpOptions);
  }

  isLoggedin(){
    return !!$.cookie('XE_AUTHUSER');
  }

  
}

