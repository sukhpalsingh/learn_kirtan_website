<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RaagTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identifier');
            $table->string('name_eng');
            $table->string('name_pun');
            $table->text('description_eng');
            $table->text('description_pun');
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
        Schema::dropIfExists('raags');
    }
}
