<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\homecontroller;
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


Route::get('/',[homecontroller::class , 'index']);
Route::post('/makeorder',[admincontroller::class , 'makeorder']);
Route::get('/showreservation',[admincontroller::class , 'showreservation']);
Route::get('/adminaddchefs',[admincontroller::class , 'adminaddchefs']);
Route::post('/adminaddnewchef',[admincontroller::class , 'adminaddnewchef']);
Route::get('/Allusers',[admincontroller::class , 'Allusers']);
Route::get('/deletfood/{id}',[admincontroller::class , 'deletfood']);
Route::get('/deletchef/{id}',[admincontroller::class , 'deletchef']);

Route::get('/updatefood/{id}',[admincontroller::class , 'updatefood']);
Route::get('/updatechef/{id}',[admincontroller::class , 'updatechef']);

Route::post('/adminupdatefood/{id}',[admincontroller::class , 'adminupdatefood']);
Route::post('/adminupdatechef/{id}',[admincontroller::class , 'adminupdatechef']);
Route::get('/foodmenu',[admincontroller::class , 'foodmenu']);
Route::get('/adminsearch',[admincontroller::class , 'adminsearch']);
Route::get('/showorders',[admincontroller::class , 'showorders']);

Route::post('/AddFood',[admincontroller::class , 'AddFood']);
Route::get('/deletuser/{id}',[admincontroller::class , 'deletuser']);

Route::get('/redirects',[homecontroller::class , 'redirects']);
Route::get('/showcart/{id}',[homecontroller::class , 'showcart']);
Route::get('/userdeletcart/{id}',[homecontroller::class , 'userdeletcart']);
Route::post('/Addcart/{id}',[homecontroller::class , 'Addcart']);
Route::post('/orderconfirm',[homecontroller::class , 'orderconfirm']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
