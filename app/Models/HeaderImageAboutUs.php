<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderImageAboutUs extends Model
{
    use HasFactory;
    public $table = 'header_image_about_us';
    protected $fillable = ['text_en', 'text_ar', 'image', 'created_at', 'updated_at'];
}
