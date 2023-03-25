<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurProducts extends Model
{
    use HasFactory;
    public $table = 'our_products';
    protected $fillable = ['text_en', 'text_ar', 'created_at', 'updated_at'];
}
