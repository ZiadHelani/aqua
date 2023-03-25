<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHeader extends Model
{
    use HasFactory;
    public $table = 'home_header';
    protected $fillable = ['image', 'created_at', 'updated_at'];
    protected $hidden = [];
}
