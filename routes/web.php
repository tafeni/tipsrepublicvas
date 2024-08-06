<?php

use App\Http\Controllers\callback;
use App\Http\Controllers\pagesController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [pagesController::class, 'index'])->middleware('checkTxnid');
Route::get('/redirecting/{txn}', [pagesController::class, 'redirecting']);
// Route::post('/', [pagesController::class, 'indexPost']);

Route::post('/query-transaction', [pagesController::class, 'queryTransaction']);
Route::post('/secured', [pagesController::class, 'securedRoute']);

Route::post('/callback',[callback::class, 'handleCallback']);
Route::get('/callback',[callback::class, 'notAllowed']);
