<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsImages extends Model
{
    use HasFactory;
    public $table = 'about_us_images';
    protected $fillable = ['image', 'created_at', 'updated_at'];
}
