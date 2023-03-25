<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable =['user_id', 'car_name'];
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class, 'car_user', 'car_id', 'user_id');
    }
}
