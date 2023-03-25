<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClient extends Model
{
    use HasFactory;
    public $table = 'our_client';
    protected $fillable = ['client_name', 'client_job', 'image', 'client_opinion', 'created_at', 'updated_at'];
}
