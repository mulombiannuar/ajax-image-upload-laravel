<?php

use App\Http\Controllers\AjaxUploadController;
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

Route::get('/ajax_upload', [AjaxUploadController::class, 'index']);

Route::post('/ajax_upload/action', [AjaxUploadController::class, 'action'])->name('ajaxupload.action');
