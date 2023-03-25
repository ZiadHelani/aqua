<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("first_name", 255);
            $table->string("last_name", 255);
            $table->string("company_name", 255)->nullable();
            $table->foreignId('shipping_id')->references('id')->on('shippings');
            $table->string("country", 255);
            $table->string("street_name", 255);
            $table->string("apartment", 255);
            $table->string("city_name", 255);
            $table->string("zip", 255);
            $table->string("phone_number", 255);
            $table->string("email", 255);
            $table->enum('status' , array('Pending', 'Reserved', 'Success', 'Failed'))->default('Pending');
            $table->string("order_notes", 255)->nullable();
            $table->string('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
