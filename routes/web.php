<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teamscontroller;
use App\Http\Controllers\StudentController; //add the ControllerNameSpace
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::get('/myteam', function () {
    return view('myteam');
})->name('myteam');

Route::post('/alldata',[teamscontroller::class, 'alldata'])->middleware(['auth'])->name('myall');
Route::post('/mydata',[teamscontroller::class, 'mydata'])->middleware(['auth'])->name('myall');
Route::post('/adddata',[teamscontroller::class, 'adddata'])->middleware(['auth'])->name('adddata');
Route::post('/myteam',[teamscontroller::class, 'myteam'])->middleware(['auth'])->name('myteam');

Route::get('/myteam2',[teamscontroller::class, 'myteam2'])->middleware(['auth'])->name('myteam2');
Route::get('/allteam',[teamscontroller::class, 'allteam'])->middleware(['auth'])->name('allteam');

Route::resource("/student", StudentController::class)->middleware(['auth']);

