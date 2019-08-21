<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'user_id',
        'feature'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_feature', 'feature_id', 'product_id')->withTimestamps();
    }
    
}
