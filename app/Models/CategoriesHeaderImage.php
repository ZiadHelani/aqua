<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesHeaderImage extends Model
{
    use HasFactory;
    public $table = 'categories_header_image';
    protected $fillable = ['image', 'created_at', 'created_at'];
}
