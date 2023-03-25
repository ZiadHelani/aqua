<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsDetails extends Model
{
    use HasFactory;
    public $table = 'products_details';
    protected $fillable = ['product_id', 'name_product_en', 'name_product_ar', 'desc_product_en', 'desc_product_ar', 'created_at', 'updated_at'];
}
