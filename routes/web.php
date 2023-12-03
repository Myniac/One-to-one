<?php

use Illuminate\Support\Facades\Route;
use App\Models\Director;

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
    $directors = \App\Models\Director::all();

    foreach ($directors as $director)
    {

        echo 'Directors name:'.$director['name'].'<br>';
        echo 'Film name:'.$director->film['name'].'<br>';

    }
});
