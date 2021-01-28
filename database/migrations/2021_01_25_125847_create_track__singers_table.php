<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackSingersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track__singers', function (Blueprint $table) {
            $table->increments('id');

			$table->integer('idTrack')->unsigned();
			$table->foreign('idTrack')->references('id')->on('tracks')->constrained()
            ->onUpdate('restrict')
            ->onDelete('cascade');

            $table->integer('idSinger')->unsigned();
			$table->foreign('idSinger')->references('id')->on('singers')->constrained()
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
        Schema::dropIfExists('track__singers');
    }
}
