<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
			$table->string('passcap2')->nullable();
            $table->string('cauhoibimat')->nullable();
            $table->timestamp('email_verified_at')->nullable();
    //google
            $table->string('google_id');;
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('avatar_original')->nullable();

            $table->integer('role')->default(0);
            $table->integer('coins')->default(500);
            $table->integer('statusPremium')->default(0);
            $table->integer('trangthaikichhoat')->default(1);
            $table->date('ngayDangKi');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
