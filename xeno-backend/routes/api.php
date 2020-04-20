<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Auth::routes(['verify' => true]);


    /*user Routes */
        Route::middleware('auth:api')->any('/user', function (Request $request) {
            return $request->user();
        });
        Route::post('users/', [
            'uses'=>'EmployeesController@show'
        ])->middleware('auth:api');
        Route::post('/users/register/', [
            'uses'=>'EmployeesController@store'
        ]);
        Route::get('/users/validation/{token}', [
            'uses'=>'EmployeesController@confirmation'
        ]);
    /*user Routes */


    /*contacts Routes */
        Route::post('/contacts/store/', [
            'uses'=>'ContactsController@store'
        ])->middleware('auth:api');
        Route::post('/contacts/show/', [
            'uses'=>'ContactsController@show'
        ])->middleware('auth:api');
        Route::post('/contacts/update/', [
            'uses'=>'ContactsController@update'
        ])->middleware('auth:api');
        Route::post('/contacts/destroy/', [
            'uses'=>'ContactsController@destroy'
        ])->middleware('auth:api');
    /*contacts Routes */

    /*audit Routes */
        Route::post('/client/audit/store/', [
            'uses'=>'AuditController@store/'
        ])->middleware('auth:api');
        Route::post('/client/audit/show/', [
            'uses'=>'AuditController@show'
        ])->middleware('auth:api');
        Route::post('/client/audit/update/', [
            'uses'=>'AuditController@update'
        ])->middleware('auth:api');
        Route::post('/client/audit/destroy/', [
            'uses'=>'AuditController@destroy'
        ])->middleware('auth:api');
    /*audit Routes */

    /*deals Routes */
        Route::post('/deals/store/', [
            'uses'=>'DealsController@store'
        ])->middleware('auth:api');
        Route::post('/deals/show/', [
            'uses'=>'DealsController@show'
        ])->middleware('auth:api');
        Route::post('/deals/showDealsContact/', [
            'uses'=>'DealsController@showDealsContact'
        ])->middleware('auth:api');
        //showDealsContact
        Route::post('/deals/update/', [
            'uses'=>'DealsController@update'
        ])->middleware('auth:api');
        Route::post('/deals/destroy/', [
            'uses'=>'DealsController@destroy'
        ])->middleware('auth:api');
    /*deals Routes */

    /*job_role and function Routes */
        Route::post('/jobroles/store/', [
            'uses'=>'DJobRolesController@store'
        ])->middleware('auth:api');
        Route::post('/jobroles/show/', [
            'uses'=>'DJobRolesController@show'
        ])->middleware('auth:api');
        Route::post('/jobroles/update/', [
            'uses'=>'DJobRolesController@update'
        ])->middleware('auth:api');
        Route::post('/jobroles/destroy/', [
            'uses'=>'DJobRolesController@destroy'
        ])->middleware('auth:api');
    /*job_role and function Routes */

    /*permission Routes */
        Route::post('/permission/store/', [
            'uses'=>'PermissionController@store'
        ])->middleware('auth:api');
        Route::post('/permission/show/', [
            'uses'=>'PermissionController@show'
        ])->middleware('auth:api');
        Route::post('/permission/update/', [
            'uses'=>'PermissionController@update'
        ])->middleware('auth:api');
        Route::post('/permission/destroy/', [
            'uses'=>'PermissionController@destroy'
        ])->middleware('auth:api');
    /*permission Routes */

    /*notes Routes */
        Route::post('/notes/store/', [
            'uses'=>'NotesController@store'
        ])->middleware('auth:api');
        Route::post('/notes/show/', [
            'uses'=>'NotesController@show'
        ])->middleware('auth:api');
        Route::post('/notes/update/', [
            'uses'=>'NotesController@update'
        ])->middleware('auth:api');
        Route::post('/notes/destroy/', [
            'uses'=>'NotesController@destroy'
        ])->middleware('auth:api');
    /*notes Routes */

    /*mail Routes */
        Route::post('/mails/store/', [
            'uses'=>'MailsController@store'
        ])->middleware('auth:api');
        Route::post('/mails/show/', [
            'uses'=>'MailsController@show'
        ])->middleware('auth:api');
        Route::post('/mails/update/', [
            'uses'=>'MailsController@update'
        ])->middleware('auth:api');
        Route::post('/mails/destroy/', [
            'uses'=>'MailsController@destroy'
        ])->middleware('auth:api');
    /*mail Routes */

    /*userType and group Routes */
        Route::post('/userstype/store/', [
            'uses'=>'UsersTypeController@store/'
        ])->middleware('auth:api');
        Route::post('/userstype/show/', [
            'uses'=>'UsersTypeController@show'
        ])->middleware('auth:api');
        Route::post('/userstype/update/', [
            'uses'=>'UsersTypeController@update'
        ])->middleware('auth:api');
        Route::post('/userstype/destroy/', [
            'uses'=>'UsersTypeController@destroy'
        ])->middleware('auth:api');
    /*userType and group Routes */

    /*goals Routes */
        Route::post('/goals/store/', [
            'uses'=>'GoalsController@store/'
        ])->middleware('auth:api');
        Route::post('/goals/show/', [
            'uses'=>'GoalsController@show'
        ])->middleware('auth:api');
        Route::post('/goals/update/', [
            'uses'=>'GoalsController@update'
        ])->middleware('auth:api');
        Route::post('/goals/destroy/', [
            'uses'=>'GoalsController@destroy'
        ])->middleware('auth:api');
    /*goals Routes */

    /*progres or history Routes */
        Route::post('/progress/store/', [
            'uses'=>'ProgressController@store/'
        ])->middleware('auth:api');
        Route::post('/progress/show/', [
            'uses'=>'ProgressController@show'
        ])->middleware('auth:api');
        Route::post('/progress/update/', [
            'uses'=>'ProgressController@update'
        ])->middleware('auth:api');
        Route::post('/progress/destroy/', [
            'uses'=>'ProgressController@destroy'
        ])->middleware('auth:api');
    /*progres or history Routes */

    /*task Routes */
        Route::post('/tasks/store/', [
            'uses'=>'TasksController@store/'
        ])->middleware('auth:api');
        Route::post('/tasks/show/', [
            'uses'=>'TasksController@show'
        ])->middleware('auth:api');
        Route::post('/tasks/update/', [
            'uses'=>'TasksController@update'
        ])->middleware('auth:api');
        Route::post('/tasks/destroy/', [
            'uses'=>'TasksController@destroy'
        ])->middleware('auth:api');
    /*task Routes */

    /*project Routes */
        Route::post('/projects/store/', [
            'uses'=>'ProjectsController@store/'
        ])->middleware('auth:api');
        Route::post('/projects/show/', [
            'uses'=>'ProjectsController@show'
        ])->middleware('auth:api');
        Route::post('/projects/update/', [
            'uses'=>'ProjectsController@update'
        ])->middleware('auth:api');
        Route::post('/projects/destroy/', [
            'uses'=>'ProjectsController@destroy'
        ])->middleware('auth:api');
    /*project Routes */

    /*reports Routes */
        Route::post('/reports/store/', [
            'uses'=>'ReportsController@store/'
        ])->middleware('auth:api');
        Route::post('/reports/show/', [
            'uses'=>'ReportsController@show'
        ])->middleware('auth:api');
        Route::post('/reports/update/', [
            'uses'=>'ReportsController@update'
        ])->middleware('auth:api');
        Route::post('/reports/destroy/', [
            'uses'=>'ReportsController@destroy'
        ])->middleware('auth:api');
    /*reports Routes */

    /*form Routes */
        Route::post('/forms/store/', [
            'uses'=>'FormsController@store/'
        ])->middleware('auth:api');
        Route::post('/forms/show/', [
            'uses'=>'FormsController@show'
        ])->middleware('auth:api');
        Route::post('/forms/update/', [
            'uses'=>'FormsController@update'
        ])->middleware('auth:api');
        Route::post('/forms/destroy/', [
            'uses'=>'FormsController@destroy'
        ])->middleware('auth:api');
    /*form Routes */

    /*company Routes */
        Route::post('/company/store/', [
            'uses'=>'CompanyController@store/'
        ])->middleware('auth:api');
        Route::post('/company/show/', [
            'uses'=>'CompanyController@show'
        ])->middleware('auth:api');
        Route::post('/company/update/', [
            'uses'=>'CompanyController@update'
        ])->middleware('auth:api');
        Route::post('/company/destroy/', [
            'uses'=>'CompanyController@destroy'
        ])->middleware('auth:api');
    /*company Routes */

    /*Branch Routes */
        Route::post('/branch/store/', [
            'uses'=>'BranchController@store/'
        ])->middleware('auth:api');
        Route::post('/branch/show/', [
            'uses'=>'BranchController@show'
        ])->middleware('auth:api');
        Route::post('/branch/update/', [
            'uses'=>'BranchController@update'
        ])->middleware('auth:api');
        Route::post('/branch/destroy/', [
            'uses'=>'BranchController@destroy'
        ])->middleware('auth:api');
    /*Branch Routes */

