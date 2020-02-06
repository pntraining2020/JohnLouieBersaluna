<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PnExam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('pnexam', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee');
            $table->time('clock_in');
            $table->time('start');
            $table->time('end');
            $table->time('clockout');
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
        //
    }
}
