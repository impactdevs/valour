<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Mapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'business_telephone_contact',
        'business_email_contact',
        'business_product_of_interest',
        'business_location',
        'physical_address',
        'contact_person_name',
        'contact_person_telephone',
        'contact_person_email',
        'contact_person_gender',
        'pitch_interest',
        'notes',
        'user_id',
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::addGlobalScope('mapping', function (Builder $builder) {
            $users = User::where('tenant_id', auth()->user()->tenant_id)->pluck('id');
            $builder->whereIn('user_id', $users);
        });
    }


    public function itemOfInterest()
    {
        return $this->hasOne(ItemOfInterest::class, 'business_id');
    }

    public function productOfInterest()
    {
        return $this->hasOne(ProductOfInterest::class, 'business_id');
    }
}
