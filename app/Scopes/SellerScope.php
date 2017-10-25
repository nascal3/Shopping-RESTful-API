<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 10/25/2017
 * Time: 3:28 PM
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SellerScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->has('products');
    }

}