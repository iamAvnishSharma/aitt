<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionTtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_tt', function (Blueprint $table) {
            $table->string('division', 255)->nullable();
            $table->string('timeslot', 255)->nullable();
            $table->string('Monday', 255)->nullable();
            $table->string('Tuesday', 255)->nullable();
            $table->string('Wednesday', 255)->nullable();
            $table->string('Thursday', 255)->nullable();
            $table->string('Friday', 255)->nullable();
            $table->string('Saturday', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('division_tt');
    }
}
