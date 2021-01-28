<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameTrack');
            $table->string('Lyric');
            $table->string('urlMp3Low');
            $table->string('urlMp3HighQty');
            $table->string('urlImages');
            $table->integer('trangThai');
            $table->integer('View');
            $table->string('Slug');
            $table->string('Tags');
            $table->date('postDate');
            $table->date('updateDate');
            $table->integer('thuTu');
            $table->boolean('anHien')->default(true);
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
        Schema::dropIfExists('tracks');
    }
}
