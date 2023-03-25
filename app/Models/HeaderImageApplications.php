<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderImageApplications extends Model
{
    use HasFactory;
    public $table = 'header_image_applications';
    protected $fillable = ['image', 'created_at', 'updated_at'];
}
