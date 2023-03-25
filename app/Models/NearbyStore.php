<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearbyStore extends Model
{
    use HasFactory;
    public $table = 'nearby_store';
    protected $fillable = ['title_en', 'title_ar', 'link_amazon', 'link_noon', 'created_at', 'updated_at'];
}
