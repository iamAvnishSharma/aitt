<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_input', function (Blueprint $table) {
            $table->string('division', 255);
            $table->string('subject', 255)->nullable();
            $table->string('hours_in_week', 255)->nullable();
            $table->string('combined', 255)->nullable();
            $table->string('batches', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('division_input');
    }
}
