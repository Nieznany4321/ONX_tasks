<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsAssigmentController extends Controller
{
    public function assignTestNotification(){
        
        $user = User::first();
        $sentData = [
            'body' => 'You received an new notification',
            'assigmentText' => 'You are allowed to enroll',
            'url' => url('/'),
            'assigned' => 'You have 14 days to enroll'

        ];
        $user->notify(new CarsNotify($sentData));
    }
}
