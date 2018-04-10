<?php

namespace MangskieShop;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

	public $timestamps = true;

	 protected $table = 'orders';

    protected $fillable = [
        'userId','productId','quantity','status', 'deliveryDateFrom', 'deliveryDateTo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
