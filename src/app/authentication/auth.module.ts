import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SigninComponent } from './signin/signin.component';
import { RegisterComponent } from './register/register.component';
import { ForgotpasswordComponent } from './forgotpassword/forgotpassword.component';
import { AuthRoutingModule } from './auth-routing.module';
import { LoginComponent } from './login.component';
import { HttpClientModule } from '@angular/common/http';
import { SingupConfirmationComponent } from './singup-confirmation/singup-confirmation.component';



@NgModule({
  declarations: [
    SigninComponent,
    RegisterComponent,
    ForgotpasswordComponent,
    LoginComponent,
    SingupConfirmationComponent
  ],
  imports: [
    CommonModule,
    AuthRoutingModule,
    HttpClientModule
  ],
  exports: [
    SigninComponent,
    RegisterComponent,
    ForgotpasswordComponent,
    LoginComponent
  ] 
})
export class AuthModule { }
