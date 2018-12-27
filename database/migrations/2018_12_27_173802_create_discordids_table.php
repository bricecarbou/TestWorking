<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscordidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discordids', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('trader_id')->unsigned();
            $table->foreign('trader_id')->references('id')->on('traders')->onDelete('cascade');

            $table->unsignedInteger('discord_id');

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
        Schema::dropIfExists('discordids');
    }
}
