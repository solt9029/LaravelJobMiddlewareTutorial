<?php

use App\Jobs\DelayLogJob;

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

Route::get('/delay-log-job', function() {
    dispatch(new DelayLogJob);
    return 'DelayLogJob dispatched';
});
