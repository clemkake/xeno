import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AdminRoutingModule } from './admin-routing.module';
import { MenuComponent } from './menu/menu.component';
import { AdminComponent } from './admin.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { DealsComponent } from './deals/deals.component';
import { MailsComponent } from './mails/mails.component';
import { ActivitiesComponent } from './activities/activities.component';
import { ContactsComponent } from './contacts/contacts.component';
import { TasksComponent } from './tasks/tasks.component';
import { GoalsComponent } from './goals/goals.component';
import { ProgressComponent } from './progress/progress.component';
import { FormsComponent } from './forms/forms.component';
import { ReportsComponent } from './reports/reports.component';


@NgModule({
  declarations: [
    AdminComponent,
    DashboardComponent,
    MenuComponent,
    DealsComponent,
    MailsComponent,
    ActivitiesComponent,
    ContactsComponent,
    TasksComponent,
    GoalsComponent,
    ProgressComponent,
    FormsComponent,
    ReportsComponent,
  ],
  imports: [
    CommonModule,
    AdminRoutingModule
  ],
  exports:[
    AdminComponent,
    DashboardComponent
  ]
})
export class AdminModule { }
