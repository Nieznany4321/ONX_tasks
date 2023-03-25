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
            @foreach($clients as $client)
            <h2>Klient: {{$client->name}}</h2>
            <p>e-mail: {{$client->email}}</p>
            </p>Pracownik:</p>
            <ul>
                
                <li>id_pracownika: {{$client->employee->id}}</li>
                <li>nr. telefonu: {{$client->employee->phone}}</li>
            </ul>
            </p>Zamówienie:</p>
            <ul>
                
                <li>id_pracownika: {{$client->order->client_id}}</li>
                <li>nazwa zamówienia: {{$client->order->order_name}}</li>
            </ul>
            @endforeach
            
        </div>
@endsection
    </body>
</html>