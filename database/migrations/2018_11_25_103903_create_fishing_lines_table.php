<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFishingLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fishing_lines', function (Blueprint $table) {
            $table->increments('line_id');
            $table->string('line_name',100);
            $table->integer('line_size');
            $table->string('line_color',100);
            $table->string('line_type',100);
            $table->string('line_brand',100);
            $table->binary('line_image');
            $table->integer('line_price');            
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
        Schema::dropIfExists('fishing_lines');
    }
}
