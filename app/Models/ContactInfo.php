<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
    public $table = 'contact_info';
    protected $fillable = ['email', 'address', 'phone', 'facebook_link', 'instagram_link', 'touch', 'created_at', 'updated_at'];
}
