<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class RoutePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_name',
        'route_description',
        'start_location',
        'end_location',
        'route_start_date',
        'route_end_date',
        'user_id',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('plan', function (Builder $builder) {
            $users = User::where('tenant_id', auth()->user()->tenant_id)->pluck('id');
            $builder->whereIn('user_id', $users);
        });
    }
}
