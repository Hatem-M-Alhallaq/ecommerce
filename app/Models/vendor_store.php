<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class vendor_store extends Model
{
    use HasFactory, Notifiable;

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
