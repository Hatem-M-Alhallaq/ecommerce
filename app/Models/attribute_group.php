<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attribute_group extends Model
{
    use HasFactory;
    public function getActivityStatusattribute()
    {

        return $this->status ? 'Active' : 'In-Active';
    }
}
