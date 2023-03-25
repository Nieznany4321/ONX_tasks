<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    
    /**
     * @var array
     */
    
    protected $fillable =['name', 'email','password'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }


}
