<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'number',
        'propertyA',
        'propertyB',
        'propertyC',
        'propertyD',
        'propertyE'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function features()
    {
        return $this->belongsToMany(Feature::class, 'product_feature', 'product_id', 'feature_id')->withTimestamps();
    }
    
}
