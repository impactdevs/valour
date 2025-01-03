<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mapping_id',
        'appointment_date_time',
        'appointment_purpose'
    ];

        /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::addGlobalScope('appointment', function (Builder $builder) {

            $users = User::where('tenant_id', auth()->user()->tenant_id)->pluck('id');
            $builder->whereIn('user_id', $users);

        });
    }

    public function mapping()
    {
        return $this->belongsTo('App\Models\Mapping', 'mapping_id');
    }
}
