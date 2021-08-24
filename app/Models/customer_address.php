<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class customer_address extends Model
{
    use HasFactory, Notifiable;

    public function customer()
    {
        return $this->belongsTo(customer::class, 'customer_id', 'id');
    }

    public function getActivityStatusattribute()
    {
        return $this->status ? 'Active' : 'In-Active';
    }
}
