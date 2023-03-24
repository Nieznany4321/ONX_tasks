<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/user', function () {
    \App\Models\Client::create([
        'name' => 'Dawid',
        'email' => 'dawid123wilk@outlook.com',
        'password' => 'idianCountry'
    ]);
    \App\Models\Client::create([
        'name' => 'Paulina',
        'email' => 'paulina_wilk@outlook.com',
        'password' => 'usCountry'
    ]);
    \App\Models\Client::create([
        'name' => 'Kamil',
        'email' => 'kamil_wilk@outlook.com',
        'password' => 'ukCountry'
    ]);
    
                
});
