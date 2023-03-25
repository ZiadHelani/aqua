<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNearbyStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nearby_store', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 255);
            $table->string('title_ar', 255);
            $table->string('link_amazon', 255);
            $table->string('link_noon', 255);
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
        Schema::dropIfExists('nearby_store');
    }
}
