<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $hidden = [
        'pivot'
    ];

    const UNAVAILABLE_PRODUCT = 'unavailable';
    const AVAILABLE_PRODUCT = 'available';

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];

    public function isAvailable () {
        return $this->status == Product::AVAILABLE_PRODUCT;
    }

    public function seller() {
        return $this->belongsTo(Seller::class);
    }

    public function transaction() {
        return $this->hasMany(Transaction::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
