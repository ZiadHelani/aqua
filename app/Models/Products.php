<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

class Products extends Model
{
    use HasFactory;
    public $table = 'products';
    protected $fillable = ['name_product_en', 'name_product_ar', 'desc_products_en', 'desc_products_ar', 'price', 'image', 'category_id', 'created_at', 'updated_at'];
    public function categories()
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }
}
