<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutOurClients extends Model
{
    use HasFactory;
    public $table = 'about_our_clients';
    protected $fillable = ['title_en', 'title_ar', 'image', 'created_at', 'updated_at'];
}
