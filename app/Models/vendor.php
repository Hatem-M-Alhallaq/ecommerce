<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class vendor extends Model
{
    use HasFactory, Notifiable;

    // protected $fillable = [
    //     'first_name', 'last_name', 'display_name', 'email', 'phone', 'fax', 'company',
    //     'address1', 'address2', 'status', 'product_status',
    //     'about_us', 'country', 'city', 'postal_code', 'state', 'password',
    //     'image', 'payment_method', 'bank_name', 'branch_number', 'swift_code',
    //     'account_name', 'iban_number', 'bank_country',
    // ];
    
    public function country()
    {
        return $this->belongsTo(country::class, 'country_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(city::class, 'city_id', 'id');
    }

    public function getActivityStatusattribute()
    {
        return $this->status ? 'Active' : 'In-Active';
    }
}
