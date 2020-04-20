import { Injectable } from '@angular/core';
import { HttpHeaders, HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ContactsService {

  
  constructor(
    private http: HttpClient
  ) { }

  create(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/contacts/store', body, httpOptions);
  }

  show(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/contacts/show', body, httpOptions);
  }

  update(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/contacts/update', body, httpOptions);
  }

  destroy(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/contacts/destroy', body, httpOptions);
  }
  
}
