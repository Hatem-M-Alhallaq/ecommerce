<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'image',
        'identity',
        'status',
        'two_factor',
        'group',
        'affiliate',
        'news_letter',
        'company',
        'website',
        'tracking_code',
        'commission',
        'payment_method',
        'paypal_email',
        'bank_name',
        'swift_code',
        'account_name',
        'account_number',
        'iban',
        'country_id',
        'city_id',


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
