import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DashboardComponent } from './dashboard/dashboard.component';
import { AdminComponent } from './admin.component';
import { DealsComponent } from './deals/deals.component';
import { MailsComponent } from './mails/mails.component';
import { ActivitiesComponent } from './activities/activities.component';
import { ContactsComponent } from './contacts/contacts.component';
import { TasksComponent } from './tasks/tasks.component';
import { GoalsComponent } from './goals/goals.component';
import { ProgressComponent } from './progress/progress.component';
import { FormsComponent } from './forms/forms.component';
import { ReportsComponent } from './reports/reports.component';


const routes: Routes = [
  {path:'', component: AdminComponent, children:[
    {path: '', redirectTo: 'admin/dashboard', pathMatch: 'full' },
    { path: 'admin/dashboard', component: DashboardComponent },
    { path: 'admin/deals', component: DealsComponent },
    { path: 'admin/mails', component: MailsComponent },
    { path: 'admin/activities', component: ActivitiesComponent },
    { path: 'admin/contacts', component: ContactsComponent },
    { path: 'admin/tasks', component: TasksComponent },
    { path: 'admin/goals', component: GoalsComponent },
    { path: 'admin/progress', component: ProgressComponent },
    { path: 'admin/forms', component: FormsComponent },
    { path: 'admin/reports', component: ReportsComponent },
  ]}
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdminRoutingModule { }
