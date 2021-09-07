<?php

use App\Http\Controllers\CarbonController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PdfController;
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

Route::get('/',[EmployeeController::class,'index']);
Route::post('import',[EmployeeController::class,'fileImport'])->name('file-import');
Route::get('export',[EmployeeController::class,'fileExport'])->name('file-export');
// Route::get('pdf',[PdfController::class,'index'])->name('show-pdf');
Route::get('pdf/download',[PdfController::class,'filePdf'])->name('download-pdf');

//Date-Time Routing
Route::get('/date',[CarbonController::class,'index']);

