import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DashboardComponent } from './dashboard/dashboard.component';
import { EmployeeComponent } from './employee.component';


const routes: Routes = [
  {path:'', component: EmployeeComponent, children:[
    {path: '', redirectTo: 'employee/dashboard', pathMatch: 'full' },
    { path: 'employee/dashboard', component: DashboardComponent },
  ]}
   
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class EmpRoutingModule { }
