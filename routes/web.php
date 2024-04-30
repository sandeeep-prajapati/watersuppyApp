<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages;
use App\Http\Controllers\login;
use App\Http\Controllers\registration;
use App\Http\Controllers\userinfo;
use App\Http\Controllers\ordersection;
use App\Http\Controllers\userDashboard;
use App\Http\Controllers\vender;

Route::get('/', [pages::class, 'index']);


Route::get('/userdashboard', [userDashboard::class,'homepage'])->middleware('loggedin');


Route::get('/login',[login::class,'loginPage']);
Route::post('/user_login',[login::class,'user_login']);



Route::get('/registration', [registration::class, 'registrationPage']);
Route::post('/user_registration',[registration::class, 'user_registration']);


Route::post('/orderdetails', [ordersection::class, 'orderdetails'])->middleware('loggedin');
Route::get('/deleteCard', [ordersection::class, 'deleteCard'])->middleware('loggedin');


Route::get('/profile',[userinfo::class, 'editinfo'])->middleware('loggedin');
Route::post('/editme',[userinfo::class, 'editme'])->middleware('loggedin');
Route::get('/editimg',[userinfo::class, 'editimg'])->middleware('loggedin');
Route::post('/changeImage',[userinfo::class, 'changeImage'])->middleware('loggedin');



Route::get('/vender',[vender::class,'login']);
Route::post('/vlogin',[vender::class,'vlogin']);
Route::get('/vdashboard',[vender::class,'dashboard'])->middleware('vender');
Route::post('/orderStatus',[vender::class,'ostatus'])->middleware('vender');


Route::get('/cancel',[vender::class, 'cancel']);
Route::get('/delivered',[vender::class, 'delivered']);
Route::get('/comming',[vender::class, 'comming']);