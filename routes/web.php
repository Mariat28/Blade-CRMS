<?php

use App\Http\Controllers\AddCommentToTicketController;
use App\Http\Controllers\AgentClosedTicketsController;
use App\Http\Controllers\AgentOpenTicketsController;
use App\Http\Controllers\AgentReplyTicketController;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ManagerCompanyController;
use App\Http\Controllers\ManagerViewAdminisController;
use App\Http\Controllers\ManagerViewSubscriptionsController;
use App\Http\Controllers\RegisterCompanyAdminController;
use App\Http\Controllers\RegisterCompanyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SupervisorsController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ViewAgentsController;
use App\Http\Controllers\ViewSupervisorsController;
use App\Http\Controllers\ViewTicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});


###AUTHENTICATION ROUTES
Route::get('/login',[AuthenticationController::class, 'index'])->name('login');
Route::post('/login',[AuthenticationController::class, 'loginUser']);
Route::post('/logout',[AuthenticationController::class, 'logoutUser'])->name('logout');


###UNIVERSAL ROUTES
Route::get('/home',[IndexPageController::class, 'index'])->name('home');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/managerdashboard',[DashboardController::class, 'manager'])->name('managerdashboard');
Route::post('/addcommenttoticket',[AddCommentToTicketController::class, 'store'])->name('addcommenttoticket');



Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);
//delete user
Route::get('/deleteuser/{id}',[RegisterController::class,'deleteuser']);
Route::post('/deleteuser/{id}',[RegisterController::class,'deleteuser']);



###MANAGER ROUTES
Route::get('/registercompany',[RegisterCompanyController::class, 'index'])->name('registercompany');
Route::post('/registercompany',[RegisterCompanyController::class, 'store']);
Route::get('/registercompanyadmin',[RegisterCompanyAdminController::class, 'index'])->name('registercompanyadmin');
Route::post('/registercompanyadmin',[RegisterCompanyAdminController::class, 'store']);
Route::get('/managerviewcompanies',[ManagerCompanyController::class, 'index'])->name('managerviewcompanies');
Route::get('/managerviewadmins',[ManagerViewAdminisController::class, 'index'])->name('managerviewadmins');
Route::get('/managerviewsubscriptions',[ManagerViewSubscriptionsController::class, 'index'])->name('managerviewsubscriptions');



###ADMINISTRATOR ROUTES
Route::get('/viewsupervisors',[SupervisorsController::class, 'supervisors'])->name('viewsupervisors');
Route::get('/addsupervisor',[SupervisorsController::class, 'index'])->name('addsupervisor');
Route::post('/addsupervisor',[SupervisorsController::class, 'addsupervisor']);



###ADMINISTRATOR AND SUPERVISOR ROUTING
//reports
Route::get('/reports',[ReportsController::class, 'index'])->name('reports');
Route::get('/ticketsvolume',[ReportsController::class, 'ticketsVolume'])->name('ticketsvolume');
Route::get('/agentsperformance',[ReportsController::class, 'agentsPerformance'])->name('agentsperformance');
Route::get('/agentperformancedetails/{agentid}',[ReportsController::class, 'agentPerformanceDetails'])->name('agentperformancedetails');
Route::get('/departmentsperformance',[ReportsController::class, 'departmentsPerformance'])->name('departmentsperformance');
Route::get('/departmentperformancedetails',[ReportsController::class, 'departmentPerformanceDetails'])->name('departmentperformancedetails');
//analytics
Route::get('/analytics',[AnalyticsController::class, 'index'])->name('analytics');
//Agents
Route::get('/viewagents',[AgentsController::class, 'viewAgents'])->name('viewagents');
Route::get('/addagent',[AgentsController::class, 'index'])->name('addagent');
Route::post('/addagent',[AgentsController::class, 'addAgent']);
//Settings
Route::get('/settings',[SettingsController::class, 'index'])->name('settings');
Route::get('/settingsusers',[SettingsController::class, 'userslist'])->name('settingsusers');
Route::get('/settingssupportchannels',[SettingsController::class, 'supportchannels'])->name('settingssupportchannels');
Route::get('/settingsgeneral',[SettingsController::class, 'general'])->name('settingsgeneral');



###SUPERVISOR ROUTES
Route::post('/registercompanysupervisor',[RegisterCompanyAdminController::class, 'store']);



###AGENTS ROUTES
Route::get('/ticketview/{ticketid}',[ViewTicketController::class, 'index'])->name('ticketview');
Route::post('/agentticketreply',[AgentReplyTicketController::class, 'store'])->name('agentticketreply');
Route::get('/agentopentickets/',[AgentOpenTicketsController::class, 'index'])->name('agentopentickets');
Route::get('/agentclosedtickets',[AgentClosedTicketsController::class, 'index'])->name('agentclosedtickets');



//Mariat Functionality Merging
Route::get('/tickets', [TicketController::class, 'ticket'])->name('tickets');
Route::post('/tickets', [TicketController::class, 'addticket']);

Route::post('/assignagent', [TicketController::class, 'assign'])->name('assignagent');

//open tickets
Route::get('/opentickets', [TicketController::class, 'openticket'])->name('opentickets');
//closed tickets
Route::get('/closedtickets', [TicketController::class, 'closedticket'])->name('closedtickets');
//pending tickets
Route::get('/pendingtickets', [TicketController::class, 'pendingticket'])->name('pendingtickets');


//create new ticket
Route::post('/addcomment', [TicketController::class, 'addcomment'])->name('addcomment');

//route for specific ticket
Route::get('/ticketdetails/{id}', [TicketController::class, 'ticketdetails'])->name('ticketdetails');

//ticket reply route
Route::post('/ticketdetails/{id}', [TicketController::class, 'ticketreply'])->name('ticketdetails');
//route for specific open ticket
Route::get('/openticketdetails/{id}', [TicketController::class, 'openticketdetails'])->name('openticketdetails');
//route to retrieve groups
Route::get('/groups', [TicketController::class, 'assign'])->name('groups');
//update ticket status
Route::get('/changestatus',[TicketController::class,'changeTicketstatus'])->name('changestatus');
Route::post('/changestatus',[TicketController::class,'changeTicketstatus'])->name('changestatus');
