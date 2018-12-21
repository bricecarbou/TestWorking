<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trads', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('trader_id')->unsigned();
            $table->foreign('trader_id')->references('id')->on('traders')->onDelete('cascade');
			$table->integer('card_id')->unsigned();

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
        Schema::dropIfExists('trads');
    }
}
