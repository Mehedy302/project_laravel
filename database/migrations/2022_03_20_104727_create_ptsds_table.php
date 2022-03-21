<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptsds', function (Blueprint $table) {
            $table->id();
            $table->string('email')->length(50);
            $table->string('Q1');
            $table->string('Q2');
            $table->string('Q3');
            $table->string('Q4');
            $table->string('Q5');
           
            $table->string('Total');

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
        Schema::dropIfExists('ptsds');
    }
};
