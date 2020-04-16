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
import { AuthGuard } from '../auth.guard';


const routes: Routes = [
  {path:'', component: AdminComponent, canActivateChild: [AuthGuard],
    children:[
    {path: '', redirectTo: 'main/dashboard', pathMatch: 'full' },
    { path: 'main/dashboard', component: DashboardComponent },
    { path: 'main/deals', component: DealsComponent },
    { path: 'main/mails', component: MailsComponent },
    { path: 'main/activities', component: ActivitiesComponent },
    { path: 'main/contacts', component: ContactsComponent },
    { path: 'main/tasks', component: TasksComponent },
    { path: 'main/goals', component: GoalsComponent },
    { path: 'main/progress', component: ProgressComponent },
    { path: 'main/forms', component: FormsComponent },
    { path: 'main/reports', component: ReportsComponent },
  ]}
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdminRoutingModule { }
