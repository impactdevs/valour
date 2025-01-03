<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Demo extends Model
{
    use HasFactory;

   protected static function booted(): void
   {
       static::addGlobalScope('demo', function (Builder $builder) {
           $users = User::where('tenant_id', auth()->user()->tenant_id)->pluck('id');
           $builder->whereIn('user_id', $users);
       });
   }

    public function visit()
    {
        return $this->belongsTo('App\Models\Visit', 'visit_id');
    }
}
