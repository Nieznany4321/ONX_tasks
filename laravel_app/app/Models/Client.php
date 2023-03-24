<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable =['name', 'email', 'password',];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function phone()
    {
        return $this->hasOne('App\Models\Employee');
    }
    public function order()
    {
        return $this->hasOne('App\Models\Order');
    }

}
