<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class prodact_category extends Model
{
    use HasFactory, Notifiable;

    public function product()
    {
        return $this->belongsTo(prodact::class, 'product_id', 'id');
    }

    public function getActivityStatusattribute()
    {

        return $this->status ? 'Active' : 'In-Active';
    }
}
