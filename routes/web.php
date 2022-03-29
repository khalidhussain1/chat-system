<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



// ================================= Admin Routes =========================
Route::group(['prefix' => 'Admin'], function () {
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
    // Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

});


// ================================= Designer Routes =========================
Route::group(['prefix' => 'Designer'], function () {
    Route::view('/index', 'Designer.index')->name('designer.index');
    Route::post('/update_information', [SettingsController::class, 'update_information'])->name('designer.update_information');
    Route::post('/change_password', [SettingsController::class, 'change_password'])->name('designer.change_password');
    Route::view('/settings', 'Designer.password-settings')->name('designer.settings');
    Route::view('/profile', 'Designer.profile-settings')->name('designer.profile-settings');

    
});

// ================================= Employee Routes =========================
Route::group(['prefix' => 'Employee'], function () {
    Route::view('/index', 'Employee.index')->name('employee.index');
    Route::post('/update_information', [SettingsController::class, 'update_information'])->name('employee.update_information');
    Route::post('/change_password', [SettingsController::class, 'change_password'])->name('employee.change_password');
    Route::view('/settings', 'Employee.password-settings'  )->name('employee.settings');
    Route::view('/profile', 'Employee.profile-settings')->name('employee.profile-settings');
});


// ================================= Client Routes =========================
Route::group(['prefix' => 'Client'], function () {
    Route::view('/index', 'Client.index')->name('client.index');
    Route::post('/update_information', [SettingsController::class, 'update_information'])->name('client.update_information');
    Route::post('/change_password', [SettingsController::class, 'change_password'])->name('client.change_password');
    Route::view('/settings', 'Client.password-settings'  )->name('client.settings');
    Route::view('/profile', 'Client.profile-settings')->name('client.profile-settings');
    Route::get('/designers', [DesignerController::class, 'designers']);
    Route::post('/update_user', [ClientController::class, 'update_user']);
    Route::any('/delete/{id}', [ClientController::class, 'delete']);
});









require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');;
Route::get('/logout', [UserController::class, 'logout']);
