@extends('layouts.app')
<!doctype html>
<html class="no-js" lang="">
    <head>
        <style>

        </style>
    </head>
    <body>
    @section('content')

        <div>   
            @foreach($users as $user)
            <h2>Użytkownik: {{$user->name}}</h2>
            <p>e-mail: {{$user->email}}</p>
            </p>Samochody:</p>
            <ul>
            @foreach($user->cars as $car)
                <li>
                    {{$car->car_name}}
                </li>
            @endforeach
            </ul>
            @endforeach
            
        </div>
@endsection
    </body>
</html>