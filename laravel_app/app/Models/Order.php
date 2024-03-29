<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     /**
     * @var array
     */
    protected $fillable =['order_name', 'client_id'];
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
