<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameSingle');
            $table->string('urlImages');
            $table->string('information');
            $table->integer('gender')->default(0);
            $table->string('Slug');
            $table->date('postDate');
            $table->date('updateDate');
            $table->integer('thuTu');
            $table->integer('trangThai');
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
        Schema::dropIfExists('singers');
    }
}
