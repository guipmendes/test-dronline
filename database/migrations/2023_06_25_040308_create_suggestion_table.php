<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuggestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggestion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('schedule_id');
            $table->string('semana',12);
            $table->string('periodo',5);
        });
        Schema::table('suggestion', function (Blueprint $table) {
            $table->foreign('schedule_id')->references('id')->on('schedule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggestion');
    }
}
