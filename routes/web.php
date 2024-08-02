<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DeshboardController;
use App\Http\Controllers\Backend\OthersController;
use App\Http\Controllers\Backend\ProjectCostController;
use App\Http\Controllers\Backend\SettingsController;
use App\Models\Designation;
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

    Route::post('/title-store', [ProjectCostController::class, 'title_store'])->name('Title_Store');

    Route::get('/add-project', [ProjectCostController::class, 'add_project'])->name('Add_Project');
    Route::get('/project-list', [ProjectCostController::class, 'project_list'])->name('Project_List');
    Route::post('/project-store', [ProjectCostController::class, 'project_store'])->name('Project_Store');

    Route::get('/project-update/{id}', [ProjectCostController::class, 'project_update'])->name('Project_Update');
    Route::get('/single-project/{id}', [ProjectCostController::class, 'single_project'])->name('Single_Project');
    Route::post('/project-update/{id}', [ProjectCostController::class, 'project_update_store'])->name('Project_Update_Store');

    Route::get('/add-component/{id}', [ProjectCostController::class, 'add_component'])->name('Add_Component');
    Route::post('/single-project/{project_id}', [ProjectCostController::class, 'project_details_store'])->name('Project_Details_Store');

    Route::get('/get-description/', [ProjectCostController::class, 'get_description'])->name('Get_Description');

    Route::group(['prefix' => 'settings'], function () {
        Route::get('/descriptions', [SettingsController::class, 'description_list'])->name('Description');
        Route::post('/descriptions', [SettingsController::class, 'description_store'])->name('Description_Store');
        Route::get('/descriptions-update/{id}', [SettingsController::class, 'update'])->name('Description_Update');
        Route::post('/description-update-store/{id}', [SettingsController::class, 'description_update'])->name('Description_Update_Store');
        Route::get('/description-delete/{id}', [SettingsController::class, 'description_delete'])->name('Description_Delete');

        Route::get('/mapping', [SettingsController::class, 'mapping'])->name('Mapping');
        Route::post('/mapping', [SettingsController::class, 'mapping_store'])->name('Designation_Store');
        Route::get('/mapping-update/{id}', [SettingsController::class, 'mapping_update'])->name('Designation_Update');
        Route::post('/mapping-update/{id}', [SettingsController::class, 'mapping_update_store'])->name('Designation_Update_Store');
        Route::get('/mapping-delete/{id}', [SettingsController::class, 'mapping_delete'])->name('Designation_Delete');

        Route::get('/salary', [SettingsController::class, 'salary'])->name('Salary');
        Route::post('/salary', [SettingsController::class, 'salary_store'])->name('Salary_Store');
        Route::get('/salary-update/{id}', [SettingsController::class, 'salary_update'])->name('Salary_Update');
        Route::post('/salary-Update/{id}', [SettingsController::class, 'salary_store_update'])->name('Salary_Update_Store');
        Route::get('/salary-delete/{id}', [SettingsController::class, 'salary_delete'])->name('Salary_Delete');

        Route::get('/title', [SettingsController::class, 'title'])->name('Title');
        Route::post('/title', [SettingsController::class, 'title_store'])->name('Title_Store');
        Route::get('/title-update/{id}', [SettingsController::class, 'title_update'])->name('Title_Update');
        Route::post('/title-Update/{id}', [SettingsController::class, 'title_store_update'])->name('Title_Update_Store');
        Route::get('/title-delete/{id}', [SettingsController::class, 'title_delete'])->name('Title_Delete');
    });
});
