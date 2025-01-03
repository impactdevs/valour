<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'visit_purpose',
        'visit_notes',
        'user_id',
    ];


   protected static function booted(): void
   {
       static::addGlobalScope('visit', function (Builder $builder) {

           $users = User::where('tenant_id', auth()->user()->tenant_id)->pluck('id');
           $builder->whereIn('user_id', $users);
      
       });
   }

    public function maintenance()
    {
        return $this->hasOne('App\Models\Maintenance', 'visit_id');
    }

    public function demo()
    {
        return $this->hasOne('App\Models\Demo', 'visit_id');
    }

    public function visit()
    {
        return $this->belongsTo(Mapping::class, 'business_id');
    }

}
