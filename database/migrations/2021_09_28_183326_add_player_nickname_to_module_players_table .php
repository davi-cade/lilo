<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPlayerNicknameToModulePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('module_players', function (Blueprint $table) {
            $table->foreign('player_nickname')->references('nickname')->on('players')->onUpdate('cascade')->onDelete('cascade');
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
            $table->dropForeign(['player_nickname']);
        });
    }
}
