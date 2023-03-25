<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shippings;
class Orders extends Model
{
    use HasFactory;
    public $table = 'orders';
    protected $fillable = ['first_name', 'last_name', 'company_name', 'shipping_id', 'country', 'street_name', 'apartment', 'city_name', 'zip', 'phone_number', 'email', 'status', 'order_notes', 'total_price', 'created_at', 'updated_at'];
    public function shipping() {
        return $this->hasOne(Shippings::class, 'id', 'shipping_id');
    }
}
