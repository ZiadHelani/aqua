<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public $table = 'categories';
    protected $fillable = ['category_name', 'desc', 'image', 'lang_id', 'created_at', 'updated_at'];
    public function langs()
    {
        return $this->hasOne(Langs::class, 'id', 'lang_id');
    }
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
