<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderAboutUs extends Model
{
    use HasFactory;
    public $table = 'header_about_us';
    protected $fillable = ['image', 'created_at', 'updated_at'];
}
