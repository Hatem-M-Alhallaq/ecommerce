<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class administrator extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'administrators';
    protected $fillable = [
        'full_name',
        'email',
        'mobile',
        'address',
        'permission_id',
        'status',
    ];

    public function getActivityStatusattribute()
    {
     
        return $this->status ? 'Active' : 'In-Active';
    }
}
