<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DeshboardController;
use App\Http\Controllers\Backend\ProjectCostController;
use App\Http\Controllers\Backend\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'login'])->name('Login');
Route::get('/logout', [AuthController::class, 'logout'])->name('Logout');
Route::post('/login', [AuthController::class, 'log_store'])->name('Login_store');
Route::get('/registration', [AuthController::class, 'registration'])->name('Registration');
Route::post('/registration', [AuthController::class, 'reg_store'])->name('Registration_store');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DeshboardController::class, 'dashboard'])->name('Dashboard');


    Route::post('/project-store', [ProjectCostController::class, 'project_store'])->name('Project_Store');
    Route::post('/title-store', [ProjectCostController::class, 'title_store'])->name('Title_Store');
    Route::post('/project-details-store', [ProjectCostController::class, 'project_details_store'])->name('Project_Details_Store');


    Route::get('/project-list', [ProjectCostController::class, 'project_list'])->name('Project_List');
    Route::get('/project-list/single/{project_id}', [ProjectCostController::class, 'single_project'])->name('Single_Project');
    Route::get('/project-list/single/add-component/{project_id}', [ProjectCostController::class, 'add_component'])->name('Add_Component');


    Route::group(['prefix' => 'settings'], function () {
        Route::get('/descriptions', [SettingsController::class, 'description'])->name('Description');
        Route::post('/descriptions', [SettingsController::class, 'description_store'])->name('Description_Store');
        Route::get('/designation', [SettingsController::class, 'designation'])->name('Designation');
        Route::post('/designation', [SettingsController::class, 'designation_store'])->name('Designation_Store');
        Route::get('/salary', [SettingsController::class, 'salary'])->name('Salary');
        Route::post('/salary', [SettingsController::class, 'salary_store'])->name('Salary_Store');
    });
});
