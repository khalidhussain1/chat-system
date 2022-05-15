<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});



Route::get('/projects', function () {
    return view('Admin.ProjectDetailPage');
})->name('projects');

Route::get('/plan', function () {
    return view('Admin.plan');
});

Route::post('/projectdetail', [AdminController::class,'project_detail'])->name('project');




// ================================= Admin Routes =========================
Route::group(['prefix' => 'Admin','middleware' => ['auth:web']], function () {
    Route::view('/index', 'Admin.index')->name('admin.index');
    Route::view('/create-users', 'Admin.create-users')->name('admin.create-users');
    Route::post('/create', [AdminController::class, 'create_user'])->name('create');
    Route::post('/update_information', [SettingsController::class, 'update_information'])->name('admins.update_information');
    Route::post('/change_password', [SettingsController::class, 'change_password'])->name('admins.change_password');
    Route::view('/settings', 'admin.password-settings')->name('admin.settings');
    Route::view('/profile', 'admin.profile-settings')->name('admin.profile-settings');
    Route::get('/users', [AdminController::class, 'users']);
    Route::post('/update_user', [AdminController::class, 'update_user']);
    Route::any('/delete/{id}', [AdminController::class, 'delete']);
    Route::get('/details/{id}', [AdminController::class, 'user_details']);
    Route::get('/updates', [AdminController::class,'updates'])->name('admin.updates');
    Route::get('/payroll', [AdminController::class,'payroll'])->name('admin.payroll');
    Route::view('/payment-request', 'Admin.payment-request')->name('admin.requestt');
    Route::get('/status', [AdminController::class, 'payment_status'])->name('admin.status');
    Route::get('/statuschnage/{id}', [AdminController::class, 'statuschnage'])->name('admin.statuschnage');
    Route::get('/requests', [AdminController::class, 'requests'])->name('admin.requests');
    // Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

});
// ================================= Project Manager  Routes =========================
Route::group(['prefix' => 'Manager'], function () {
    Route::view('/employes', 'Admin.employes')->name('admin.employes');
    Route::view('/project', 'Admin.project-posting')->name('admin.project-posting');
    Route::post('/assign-project', [ManagerController::class, 'assigning_projects'])->name('manager.assignprojects');
    Route::post('/chat-visibility', [AdminController::class,'chat_visibility'])->name('admin.chat-visibility');
    Route::get('/chat-option', [Admincontroller::class,'messages'])->name('admin.chat-option');
    Route::view('/chat', 'Admin.chat-visibility')->name('admin.chat');
    Route::view('/reports', 'Admin.reporting')->name('manager.reports');
    Route::post('/reporting', [AdminController::class,'reports'])->name('admin.reporting');
    Route::get('/post-project', [AdminController::class,'post_project'])->name('admin.projectposting');
    Route::post('/post', [AdminController::class,'post'])->name('admin.post');

});
// ================================= Designer Routes =========================
Route::group(['prefix' => 'Designer','middleware' => ['auth:web']], function () {
    Route::view('/index', 'Designer.index')->name('designer.index');
    Route::post('/update_information', [SettingsController::class, 'update_information'])->name('designer.update_information');
    Route::post('/change_password', [SettingsController::class, 'change_password'])->name('designer.change_password');
    Route::view('/settings', 'Designer.password-settings')->name('designer.settings');
    Route::view('/profile', 'Designer.profile-settings')->name('designer.profile-settings');

    // Route::view('/projects', 'Designer.assigned-projects')->name('designer.assigned-projects');
    Route::get('/projects', [DesignerController::class, 'designer_projects']);
});

// ================================= Employee Routes =========================
Route::group(['prefix' => 'Employee','middleware' => ['auth:web']], function () {
    Route::view('/index', 'Employee.index')->name('employee.index');
    Route::post('/update_information', [SettingsController::class, 'update_information'])->name('employee.update_information');
    Route::post('/change_password', [SettingsController::class, 'change_password'])->name('employee.change_password');
    Route::view('/settings', 'Employee.password-settings')->name('employee.settings');
    Route::view('/profile', 'Employee.profile-settings')->name('employee.profile-settings');
    Route::view('/payment-request', 'Employee.pyment-request')->name('employee.requestt');
    Route::post('/request', [EmployeeController::class, 'payment_request'])->name('employee.request');
    Route::get('/status', [EmployeeController::class, 'payment_status'])->name('employee.status');
});



// ================================= Client Routes =========================
Route::group(['prefix' => 'Client','middleware' => ['auth:web']], function () {
    Route::view('/index', 'Client.index')->name('client.index');
    Route::post('/update_information', [SettingsController::class, 'update_information'])->name('client.update_information');
    Route::post('/change_password', [SettingsController::class, 'change_password'])->name('client.change_password');
    Route::view('/settings', 'Client.password-settings')->name('client.settings');
    Route::view('/profile', 'Client.profile-settings')->name('client.profile-settings');
    Route::get('/designers', [DesignerController::class, 'designers']);
    Route::post('/update_user', [ClientController::class, 'update_user']);
    Route::any('/delete/{id}', [ClientController::class, 'delete']);
    Route::get('/projects', [ClientController::class,'projects'])->name('client.projects');
});









require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');;
Route::get('/logout', [UserController::class, 'logout']);

// ====================== paypal routes ======================

Route::get('payment', [PaymentController::class,'index']);
Route::post('charge', [PaymentController::class,'charge']);
Route::get('success', [PaymentController::class,'success']);
Route::get('error', [PaymentController::class,'error']);