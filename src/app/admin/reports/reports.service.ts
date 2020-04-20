import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ReportsService {

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
   return this.http.post('/api/reports/store', body, httpOptions);
  }

  show(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/reports/show', body, httpOptions);
  }

  update(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/reports/update', body, httpOptions);
  }

  destroy(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/reports/destroy', body, httpOptions);
  }
  
  
}
