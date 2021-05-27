<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserConditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_conditions', function (Blueprint $table) { // テーブル名を複数形に変更
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('wake');
            $table->string('temperature');
            $table->string('medicine');
            $table->string('meal_amount');
            $table->string('oxygen');
            $table->string('blood_pressure');
            $table->timestamps();
            
            //外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_conditions'); // テーブル名を複数形に変更
    }
}
