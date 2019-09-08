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
    $log = (new DelayLogJob)->delay(10);
    dispatch($log);
    return 'DelayLogJob dispatched';
});
