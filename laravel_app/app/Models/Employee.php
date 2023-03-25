<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     /**
     * @var array
     */
    protected $fillable =['phone', 'client_id'];
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
