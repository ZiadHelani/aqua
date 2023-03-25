<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderDetailsApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_details_applications', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 255);
            $table->string('title_ar', 255);
            $table->string('sub_title_en', 255);
            $table->string('sub_title_ar', 255);
            $table->string('desc_en', 255);
            $table->string('desc_ar', 255);
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
        Schema::dropIfExists('header_details_applications');
    }
}
