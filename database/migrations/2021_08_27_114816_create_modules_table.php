<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            //$table->boolean('accessible')->default(false);
            //$table->unsignedBigInteger('next_module_id')->unique()->nullable();
            $table->timestamps();
        });
        /*Schema::table('modules', function (Blueprint $table) {
            $table->foreign('next_module_id')->references('id')->on('modules')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
