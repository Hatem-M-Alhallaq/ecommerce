<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'currency',
        'customer_id',
        'first_name',
        'last_name',
        'phone',
        'date',
        'shipping_method',
        'order_date',
        'payment_method',
        'shipping_address',
        'sub_totle',
        'shipping_amount',
        'VAT',
        'total	',
        'affiliate_value',
        'affiliate_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
