<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chests', function (Blueprint $table) {
            $table->id();
            $table->integer('Rubys');
            $table->integer('Chances');
            $table->integer('Coins');
            $table->bigInteger('Score');
            $table->unsignedBigInteger('user_id')->unique();
            $table->timestamps();
        });

        Schema::table('chests', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chests');
    }
}
