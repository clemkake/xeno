import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../auth.service';

declare var $: any;
declare var bootoast: any;

@Component({
  selector: 'app-signin',
  templateUrl: './signin.component.html',
  styleUrls: ['./signin.component.css']
})
export class SigninComponent implements OnInit {

  constructor(
    private _router: Router,
    private http: AuthService
  ) { }

  login(){
    var body = {
      grant_type:'password',
      client_id:2,
      client_secret:'y0O7AhNTNGHGDpu21fradLJBVcoIP1U60shzOjnE',
      username: $('#username').val(),
      scope:'*',
      password: $('#password').val()
    };
    this.http.getToken(body).subscribe( 
      (data) => {
        localStorage.setItem('xenoElement', JSON.stringify(data));
        var date = new Date();
        date.setTime(date.getTime() + (10 * 60 * 1000));
        $.cookie('XE_AUTHUSER','true', { expires: date });
        var bdy_params = {
          username: $('#username').val(),
          password: $('#password').val()
        }
        this.http.Login(bdy_params).subscribe(
          (result) => {
            //@ts-ignore
            localStorage.setItem('XE_AUTHUSER', JSON.stringify(result));
            var date = new Date();
            date.setTime(date.getTime() + (10 * 60 * 1000));
            //@ts-ignore
            $.cookie('XE_AUTHUSER_ID', result.id,{ expires: date });
            bootoast.toast({
              message: 'LOGGED IN SUCCESSFULY',
              type: 'success',
              position: 'top-right'
            });
            this._router.navigate(['/'])
          },
          (error) => {
            bootoast.toast({
              message: error.error.message,
              type: 'danger',
              position: 'top-right'
            });
          }
        )

      },
      (error) => {
        bootoast.toast({
          message: error.error.message,
          type: 'danger',
          position: 'top-right'
        });
      }
    )
  }

  ngOnInit() {
  }

}
