import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class TasksService {

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
   return this.http.post('/api/tasks/store', body, httpOptions);
  }

  show(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/tasks/show', body, httpOptions);
  }

  update(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/tasks/update', body, httpOptions);
  }

  destroy(body){
    let httpOptions = {
     headers: new HttpHeaders({
       'Content-Type':  'application/json',
       'Authorization': JSON.parse(localStorage.getItem('xenoElement')).token_type + ' ' + JSON.parse(localStorage.getItem('xenoElement')).access_token
     })
   }
   return this.http.post('/api/tasks/destroy', body, httpOptions);
  }
  
}
