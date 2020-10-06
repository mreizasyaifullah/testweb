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
    // return view('main');
    return redirect("ppti");
});


// Route::get('/{nameee}', function ($nameee) {
//     //echo($nameee);
//     return view('default', ['nameee'=>$nameee]);
// });

Route::view('/ppti', 'ppti');
Route::view('/insinas', 'insinas');
