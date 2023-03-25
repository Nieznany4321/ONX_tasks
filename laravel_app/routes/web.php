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


    \App\Models\Employee::create([
        'client_id' => '1',
        'phone' => '456786695'

    ]);
    \App\Models\Employee::create([
        'client_id' => '2',
        'phone' => '395867576'

    ]);
    \App\Models\Employee::create([
        'client_id' => '3',
        'phone' => '347555884'

    ]);

    \App\Models\Order::create([
        'client_id' => '1',
        'order_name' => 'szafa'

    ]);
    \App\Models\Order::create([
        'client_id' => '2',
        'order_name' => 'komoda'

    ]);
    \App\Models\Order::create([
        'client_id' => '3',
        'order_name' => 'regał'

    ]);
    $clients =\App\Models\Client::all();
    return view('clients.index', compact('clients'));
    
                
});

Route::get('/table', function () {
//     //  Users added

    App\Models\User::create([
        'name' => 'Paulina',
        'email' => 'paulina_wilk@outlook.com',
        'password' => 'kdrms'
    ]);
    App\Models\User::create([
        'name' => 'Dawid',
        'email' => 'dawid_wilk@outlook.com',
        'password' => 'drmskhp'
    ]);

   // adding cars to users 
        $user = \App\Models\User::first();

        $car = \App\Models\Car::with('users')->first();
        
        $car->users()->attach([1,2]);
        dd($post);
//Adding cars
    App\Models\Car::create([
        'car_name' => 'ford',

    ]);
    $users =\App\Models\User::with('cars')->get();

    return view('users.index', compact('users'));
    
});
Route::get('/create', function () {

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



    //     App\Models\Car::create([
    //     'car_name' => 'ford',

    // ]);
    $clients =\App\Models\Client::all();
    return view('clients.index', compact('clients'));
});
Route::get('/send-carassigment', [CarsAssigmentController::class,
'assignTestNotification']);