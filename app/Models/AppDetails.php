<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppDetails extends Model
{
    use HasFactory;
    public $table = 'app_details';
    protected $fillable = ['text_en', 'text_ar', 'image', 'link_google', 'link_apple', 'created_at', 'updated_at'];
}
