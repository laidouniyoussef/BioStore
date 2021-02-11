<?php

namespace App\Models\models;
//namespace App\models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_name',
        'product_desc',
        'price',
        'weight',
        'category_id',
        'status',
        'slug'
            ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productImage()
    {
        return $this->hasMany('App\models\ProductImage');
    }
 
    
}
