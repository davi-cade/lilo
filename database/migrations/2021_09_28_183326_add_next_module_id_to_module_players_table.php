<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNextModuleIdToModulePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('module_players', function (Blueprint $table) {
            $table->foreign('next_module_player_id')->references('id')->on('module_players')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('module_players', function (Blueprint $table) {
            $table->dropForeign(['next_module_player_id']);
        });
    }
}
