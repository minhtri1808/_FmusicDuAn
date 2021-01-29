<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album__tracks', function (Blueprint $table) {
            $table->increments('id');

			$table->integer('idTrack')->unsigned();
			$table->foreign('idTrack')->references('id')->on('tracks')->constrained()
            ->onUpdate('restrict')
            ->onDelete('cascade');

            $table->integer('idAlbum')->unsigned();
			$table->foreign('idAlbum')->references('id')->on('tracks')->constrained()
            ->onUpdate('restrict')
            ->onDelete('cascade');
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
        Schema::dropIfExists('album__tracks');
    }
}
