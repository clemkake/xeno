import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SigninComponent } from './signin/signin.component';
import { RegisterComponent } from './register/register.component';
import { ForgotpasswordComponent } from './forgotpassword/forgotpassword.component';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './login.component';

const authroutes: Routes = [
  {path: '', component: LoginComponent, children:[
    { path: '', redirectTo: 'login', pathMatch: 'full' },
    { path: 'login', component: SigninComponent },
    { path: 'register', component: RegisterComponent },
    { path: 'password-reset', component: ForgotpasswordComponent },
  ]},


];

@NgModule({
  declarations: [
  ],
  imports: [
    CommonModule,
    RouterModule.forRoot(authroutes)
  ],
  exports:[
    RouterModule
  ]
})
export class AuthRoutingModule { }
