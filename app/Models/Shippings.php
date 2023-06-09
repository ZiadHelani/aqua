<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shippings extends Model
{
    use HasFactory;
    public $table = 'shippings';
    protected $fillable = ['country_name', 'shipping_cost', 'created_at', 'updated_at'];
}
