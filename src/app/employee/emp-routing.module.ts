import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DashboardComponent } from './dashboard/dashboard.component';
import { EmployeeComponent } from './employee.component';
import { AuthGuard } from '../auth.guard';


const routes: Routes = [
  {path:'', component: EmployeeComponent, canActivateChild: [AuthGuard],
    children:[
    {path: '', redirectTo: 'admin/dashboard', pathMatch: 'full' },
    { path: 'admin/dashboard', component: DashboardComponent },
  ]}
   
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class EmpRoutingModule { }
