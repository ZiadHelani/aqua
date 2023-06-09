<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;
    public $table = 'product_images';
    protected $fillable = ['image', 'created_at', 'updated_at'];
}
