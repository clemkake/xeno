import { NgModule } from '@angular/core';
import { RouterModule, Routes, PreloadAllModules } from '@angular/router';
import { CommonModule } from '@angular/common';
import { AdminComponent } from './admin/admin.component';
import { EmployeeComponent } from './employee/employee.component';
import { NotfoundComponent } from './notfound/notfound.component';
import { ForgotpasswordComponent } from './authentication/forgotpassword/forgotpassword.component';
import { PermissiondeniedComponent } from './permissiondenied/permissiondenied.component';



const routes: Routes = [
  {path: '', redirectTo: 'auth', pathMatch: 'full' },
  // { path: 'admin', component: AdminComponent },
  // { path: 'employee', component: EmployeeComponent },
  { path: 'admin', loadChildren: () => import('./admin/admin-routing.module').then(mod => mod.AdminRoutingModule)},
  { path: 'employee', loadChildren: () => import('./employee/emp-routing.module').then(mod => mod.EmpRoutingModule)},
  { path: 'auth', loadChildren: () => import('./authentication/auth-routing.module').then(mod => mod.AuthRoutingModule)},
  { path: 'permission-denied', component: PermissiondeniedComponent },
  { path: '**', component: NotfoundComponent }
];

@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports:[
    RouterModule
  ]
})
export class AppRoutingModule { }
