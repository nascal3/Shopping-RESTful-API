<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 10/25/2017
 * Time: 3:20 PM
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BuyerScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
       $builder->has('transactions');
    }


}