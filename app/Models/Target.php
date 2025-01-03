<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Target extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'target_metrics_id',
    ];

   protected static function booted(): void
   {
       static::addGlobalScope('target', function (Builder $builder) {
           $users = User::where('tenant_id', auth()->user()->tenant_id)->pluck('id');
           $builder->whereIn('user_id', $users);
       });
   }

    //a tatrget can belong to many users
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function targetMetrics()
    {
        return $this->belongsTo(TargetMetric::class, 'target_metrics_id');
    }
}
