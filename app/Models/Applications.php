<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;
    public $table = 'applications';
    protected $fillable = ['title', 'sub_title', 'desc', 'image', 'created_at', 'updated_at'];
}
