<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrTtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cr_tt', function (Blueprint $table) {
            $table->string('cr', 255)->nullable();
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
        Schema::dropIfExists('cr_tt');
    }
}
