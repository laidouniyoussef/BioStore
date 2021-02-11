<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable=[
        'img_title',
        'img',
        'product_id',
        'status',
        'slug'];

    public function product()
    {
        return $this->belongsTo('App\Models\models\Product');
    }
}
