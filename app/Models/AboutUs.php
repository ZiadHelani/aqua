<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    public $table = 'about_us';
    protected $fillable = ['text_en', 'text_de', 'image', 'created_at', 'updated_at'];
}
