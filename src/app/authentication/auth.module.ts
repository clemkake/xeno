import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SigninComponent } from './signin/signin.component';
import { RegisterComponent } from './register/register.component';
import { ForgotpasswordComponent } from './forgotpassword/forgotpassword.component';
import { AuthRoutingModule } from './auth-routing.module';
import { LoginComponent } from './login.component';



@NgModule({
  declarations: [
    SigninComponent,
    RegisterComponent,
    ForgotpasswordComponent,
    LoginComponent
  ],
  imports: [
    CommonModule,
    AuthRoutingModule
  ],
  exports: [
    SigninComponent,
    RegisterComponent,
    ForgotpasswordComponent,
    LoginComponent
  ] 
})
export class AuthModule { }
