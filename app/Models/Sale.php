<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'visit_id'
    ];


    protected static function booted(): void
    {
        static::addGlobalScope('sale', function (Builder $builder) {

            $users = User::where('tenant_id', auth()->user()->tenant_id)->pluck('id');
            $builder->whereIn('user_id', $users);
        });
    }

    public function visit()
    {
        return $this->belongsTo('App\Models\Visit', 'visit_id');
    }

    public function saleProducts()
    {
        return $this->hasMany(SaleProduct::class);
    }
}
