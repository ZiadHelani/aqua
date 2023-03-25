<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_details', function (Blueprint $table) {
            $table->id();
            $table->string('text_en', 255);
            $table->string('text_ar', 255);
            $table->string('image', 255);
            $table->string('link_google', 255);
            $table->string('link_apple', 255);
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
        Schema::dropIfExists('app_details');
    }
}
