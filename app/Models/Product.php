<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'quantity',
        'category',
        'description',
        'type',
        'unit',
        'tenant_id',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('mapping', function (Builder $builder) {
            $builder->where('tenant_id', auth()->user()->tenant_id);
        });
    }
}
