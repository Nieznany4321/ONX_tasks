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

Route::get('/client', function () {

    // \App\Models\Client::create([
    //     'name' => 'Dawid',
    //     'email' => 'dawid123wilk@outlook.com',
    //     'password' => 'idianCountry'
    // ]);

    // \App\Models\Client::create([
    //     'name' => 'Paulina',
    //     'email' => 'paulina_wilk@outlook.com',
    //     'password' => 'usCountry'
    // ]);
    // \App\Models\Client::create([
    //     'name' => 'Kamil',
    //     'email' => 'kamil_wilk@outlook.com',
    //     'password' => 'ukCountry'
    // ]);


    // \App\Models\Employee::create([
    //     'client_id' => '1',
    //     'phone' => '456786695'

    // ]);
    // \App\Models\Employee::create([
    //     'client_id' => '2',
    //     'phone' => '395867576'

    // ]);
    // \App\Models\Employee::create([
    //     'client_id' => '3',
    //     'phone' => '347555884'

    // ]);

    // \App\Models\Order::create([
    //     'client_id' => '1',
    //     'order_name' => 'szafa'

    // ]);
    // \App\Models\Order::create([
    //     'client_id' => '2',
    //     'order_name' => 'komoda'

    // ]);
    // \App\Models\Order::create([
    //     'client_id' => '3',
    //     'order_name' => 'regał'

    // ]);
    $clients =\App\Models\Client::all();
    return view('clients.index', compact('clients'));
    
                
});
Route::get('/user', function () {

    // App\Models\User::create([
    //     'name' => 'Dawid',
    //     'email' => 'dawid123wilk@outlook.com',
    //     'password' => 'idianCountry'
    // ]);

    // App\Models\Car::create([
    //     'user_id' => 1,
    //     'car_name' => 'fiat',

    // ]);
    $users =\App\Models\User::with('cars')->get();

    return view('users.index', compact('users'));
    
                
});
