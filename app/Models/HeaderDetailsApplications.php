<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderDetailsApplications extends Model
{
    use HasFactory;
    public $table = 'header_details_applications';
    protected $fillable = ['title_en', 'title_ar', 'sub_title_en', 'sub_title_ar', 'desc_en', 'desc_ar'];
}
