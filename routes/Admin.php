<?php

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
Route::get('/admin', function () {
    return "hello in admin 1";
});
/***********************************  normal route **************************************/



/*********************************** route parmetrs **************************************/


route::get('prametrs/{id}',function( ){
return "hello in route with parametrs";

});
/*********************************** route name **************************************/

route::get('facebook',function(){
    return "hello in facebook page";
})->name('fa');



