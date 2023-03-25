<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurMission extends Model
{
    use HasFactory;
    public $table = 'our_mission';
    protected $fillable = ['text_en', 'text_ar', 'image', 'created_at', 'updated_at'];
}
