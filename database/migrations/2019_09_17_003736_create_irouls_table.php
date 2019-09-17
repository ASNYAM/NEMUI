<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIroulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irouls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->string('q1_plus')->nullable(false);
            $table->string('q1_minus')->nullable(false);
            $table->string('q2_plus')->nullable(false);
            $table->string('q2_minus')->nullable(false);
            $table->string('q3_plus')->nullable(false);
            $table->string('q3_minus')->nullable(false);
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
        Schema::dropIfExists('irouls');
    }
}
