<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function mapping()
    {
        return $this->belongsTo('App\Models\Mapping', 'mapping_id');
    }
}
