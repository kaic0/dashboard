<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'product_category_id'
    ];

    public function categories() {
        return $this->belongsTo(\App\ProductCategory::class, 'product_category_id', 'id');
    }

}
