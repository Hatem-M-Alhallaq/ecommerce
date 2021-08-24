<?php

namespace App\Models;

use App\Http\Controllers\AttributeGroupController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class attribute extends Model
{
    use HasFactory, Notifiable;

    public function attributeGroup()
    {
        return $this->belongsTo(attribute_group::class, 'group_id', 'id');
    }
}
