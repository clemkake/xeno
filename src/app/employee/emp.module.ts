import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { EmpRoutingModule } from './emp-routing.module';
import { MenuComponent } from './menu/menu.component';
import { EmployeeComponent } from './employee.component';
import { DashboardComponent } from './dashboard/dashboard.component';


@NgModule({
  declarations: [
    EmployeeComponent,
    DashboardComponent,
    MenuComponent
  ],
  imports: [
    CommonModule,
    EmpRoutingModule
  ],
  exports:[
    EmployeeComponent,
    DashboardComponent
  ]
})
export class EmpModule { }
