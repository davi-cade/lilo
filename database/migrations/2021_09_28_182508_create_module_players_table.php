<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_players', function (Blueprint $table) {
            $table->id();
            $table->boolean('accessible')->default(false);
            $table->boolean('concluded')->default(false);
            $table->integer('total_available_card');
            $table->integer('total_assimilated_card');
            $table->foreignId('module_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('player_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('next_module_player_id')->nullable();
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
        Schema::dropIfExists('module_players');
    }
}
