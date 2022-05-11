<?php

use App\Http\Controllers\TicketController;
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

Route::get('/',function(){
    return view('newTicket');
});
Route::get('app',function(){
    return view('layout.app');
});
Route::post('show',[TicketController::class,'show']);

Route::get('showTicket/{id}',[TicketController::class,'showTicket']);


Route::post('/store',[TicketController::class,'store']);
