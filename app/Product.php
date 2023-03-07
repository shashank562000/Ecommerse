<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id', 'sub_category_id', 'description', 'code', 'image', 'slug', 'quantity', 'price', 'meta_keywords', 'meta_description', 'on_sale', 'is_new'];

    /**
    * change key from id to slug
    * @param $slug
    *
    */
    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function transactions()
    {
    	return $this->hasMany(Transaction::class);
    }

    public function inStock()
    {
        return $this->quantity > 0;
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }
}
