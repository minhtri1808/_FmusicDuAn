<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListenHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listen_historys', function (Blueprint $table) {
            $table->increments('id');

			$table->integer('idUsers')->unsigned();
			$table->foreign('idUsers')->references('id')->on('users')->constrained()
            ->onUpdate('restrict')
            ->onDelete('cascade');

            $table->integer('idTrack')->unsigned();
			$table->foreign('idTrack')->references('id')->on('tracks')->constrained()
            ->onUpdate('restrict')
            ->onDelete('cascade');

            $table->date('postDate');
            $table->date('updateDate');

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
        Schema::dropIfExists('listen_historys');
    }
}
