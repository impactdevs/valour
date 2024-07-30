<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mapping_id',
        'appointment_date_time',
        'appointment_purpose'
    ];

    public function mapping()
    {
        return $this->belongsTo('App\Models\Mapping', 'mapping_id');
    }
}
