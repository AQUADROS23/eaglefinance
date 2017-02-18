<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutualfund extends Model
{
    //
    protected $fillable=[
        'customer_id',
        'scheme',
        'units',
        'category',
        'purchase_price',
        'purchase_date',
        'return_date',
        'return_price',

    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
