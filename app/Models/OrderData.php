<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
class OrderData extends Model
{
    use HasFactory;
    public $table = 'order_data';
    protected $fillable = ['order_id', 'product_id', 'quantity', 'total', 'created_at', 'updated_at'];
    public function products() {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
}
