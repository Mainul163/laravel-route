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
// Route::get('/about', function () {
//     return view ('about');
// });

Route::get('/content', function () {
    return view('content');
});

Route::get('/country',function(){

    return view('country');
})->middleware('country');

// *********view  route ************
 
// Route::view('/about','about');





// *********name  route ************

Route::get('/about',function(){
    return view ('about');

})->name('about');



// *********redirect route ************
 
// Route::get('/about', function () {
//     return redirect ('/content');
// });



//  *********pera-meter route ************

// Route::get('/content/{roll}', function ($roll) {

//     return "My roll is $roll";
    
// });