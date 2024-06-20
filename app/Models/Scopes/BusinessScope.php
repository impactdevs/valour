<?php

namespace App\Models\Scopes;

use App\Models\Mapping;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BusinessScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        //get the role column for the current user
        $role = auth()->user()->role;
        if ($role == 'admin') {
            $business_id = Mapping::where('user_id', auth()->id())->first()->business_id;
            $builder->where('business_id', $business_id);
        } else {
            $business_id = Mapping::where('user_id', auth()->id())->first()->business_id;
            $builder->where('business_id', $business_id)->where('user_id', auth()->id());
        }
    }
}
