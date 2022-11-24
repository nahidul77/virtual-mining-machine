<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVmmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('life_time');
            $table->unsignedInteger('min_invest');
            $table->unsignedInteger('dist_coin');
            $table->integer('exe_time');
            $table->integer('prep_time');
            $table->dateTime('start_time');
            $table->enum('status', ['draft', 'active', 'in_preparation', 'running', 'finished']);
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
        Schema::dropIfExists('vmms');
    }
}
