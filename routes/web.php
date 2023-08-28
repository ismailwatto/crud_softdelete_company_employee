<?php

use App\Http\Controllers\companycontroller;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/company', [CompanyController::class, 'companydata'])->name('companydata');
Route::post('/storee', [CompanyController::class, 'storee'])->name('formdata');
Route::get('companydata', [CompanyController::class, 'index'])->name('pages.company.index');
Route::get('companies/{company}', [CompanyController::class, 'show'])->name('pages.company.show');

Route::get('companies/{id}/edit', [CompanyController::class, 'edit'])->name('pages.company.edit');
Route::post('companies/{id}', [CompanyController::class, 'update'])->name('pages.company.update');

Route::get('company/trash', [CompanyController::class, 'trash']);
Route::get('company/{id}/restore', [CompanyController::class, 'restore'])->name('pages.company.restore');
Route::get('company/{id}/delete', [CompanyController::class, 'delete'])->name('pages.company.delete');
Route::get('company/{id}/destroy', [CompanyController::class, 'destroy'])->name('pages.company.destroy');


Route::get('/employeedata', [EmployeeController::class, 'employeedata']);
Route::post('/store', [EmployeeController::class, 'store'])->name('employee');
Route::get('/employees/', [EmployeeController::class, 'index'])->name('pages.employee.index');
Route::get('/employee/{employee}', [EmployeeController::class, 'show'])->name('pages.employee.show');
