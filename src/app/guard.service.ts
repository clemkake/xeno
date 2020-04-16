import { Injectable } from '@angular/core';
import { CanActivate, Router } from '@angular/router';
declare var $:any;
declare var bootoast: any;



@Injectable({
  providedIn: 'root'
})
export class GuardService implements CanActivate{

  constructor(
    private router: Router
  ) { }
  
  canActivate () {
    var isLoggedIn = $.cookie('XE_AUTHUSER') ;
    console.log(isLoggedIn);
    if(isLoggedIn == "true"){
      return true
    } else {
      this.router.navigate(['/login']);
      bootoast.toast({
        message: 'Your session has expired Please login again',
        type: 'warning',
        position: 'top-right'
      });
      //window.location.href = "/login";
      return false;
    }
  }

}
