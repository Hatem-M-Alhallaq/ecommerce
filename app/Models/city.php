<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class city extends Model
{
    use HasFactory, Notifiable;

    public function country()
    {
        return $this->belongsTo(country::class, 'country_id', 'id');
    }

    public function getActivityStatusattribute()
    {

        return $this->status ? 'Active' : 'In-Active';
    }
}
