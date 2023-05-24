<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view ('about');
});

Route::get('/content', function () {
    return view('content');
});


// *********view  route ************
 
// Route::view('/about','about');




// *********redirect route ************
 
// Route::get('/about', function () {
//     return redirect ('/content');
// });



//  *********pera-meter route ************

// Route::get('/content/{roll}', function ($roll) {

//     return "My roll is $roll";
    
// });