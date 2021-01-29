<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->increments('id');

			$table->integer('idUser')->unsigned();
			$table->foreign('idUser')->references('id')->on('users')->constrained()
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
        Schema::dropIfExists('follows');
    }
}
