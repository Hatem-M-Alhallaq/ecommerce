<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class country extends Model
{
    use HasFactory, Notifiable;

    public function getActivityStatusattribute()
    {

        return $this->status ? 'Active' : 'In-Active';
    }
}
