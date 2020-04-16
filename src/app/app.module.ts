import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { AdminComponent } from './admin/admin.component';
import { AppRoutingModule } from './app-routing.module';
import { AuthModule } from './authentication/auth.module';
import { PermissiondeniedComponent } from './permissiondenied/permissiondenied.component';
import { NotfoundComponent } from './notfound/notfound.component';
import { AdminModule } from './admin/admin.module';
import { EmpModule } from './employee/emp.module';
import { CommonModule } from '@angular/common';
import { AuthGuard } from './auth.guard';

@NgModule({
  declarations: [
    AppComponent,
    PermissiondeniedComponent,
    NotfoundComponent
    ],
  imports: [
    BrowserModule,
    AdminModule,
    EmpModule,
    AuthModule,
    AppRoutingModule,   
  ],
  providers: [AuthGuard],
  bootstrap: [AppComponent]
})
export class AppModule { }
