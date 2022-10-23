<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->id();
            $table->string('bu_name');
            $table->string('bu_price');
            $table->string('rooms');
            $table->tinyInteger('bu_rent');
            $table->string('bu_square');
            $table->tinyInteger('bu_type');
            $table->string('bu_small_dis');
            $table->string('bu_meta');
            $table->string('bu_langtude');
            $table->string('bu_latitude');
            $table->longText('bu_large_dis');
            $table->tinyInteger('bu_status');
            $table->longText("img");
            $table->integer('user_id');
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
        Schema::dropIfExists('bus');
    }
}
