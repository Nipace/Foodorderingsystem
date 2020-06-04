<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Order extends Model
{
    protected $fillable = [
        'item_name', 'price', 'quantity','user_id','service_type','delivery_address','time','order_status','payment_status'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
