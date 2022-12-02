<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;     

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
        
Route::get('/employee/list', [EmployeeController::class, 'index'])->name('list.employee');  
Route::get('/employee/add', [EmployeeController::class, 'add'])->name('add.employee');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('store.employee');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('edit.employee');
Route::post('/employee/update', [EmployeeController::class, 'update'])->name('update.employee');
Route::post('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('delete.employee');

Route::get('/student/list', [StudentController::class, 'index'])->name('list.student');  
Route::get('/student/add', [StudentController::class, 'add'])->name('add.student');
Route::post('/student/store', [StudentController::class, 'store'])->name('store.student');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('edit.student');
Route::post('/student/update', [StudentController::class, 'update'])->name('update.student');
Route::post('/student/delete/{id}', [StudentController::class, 'delete'])->name('delete.student');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
