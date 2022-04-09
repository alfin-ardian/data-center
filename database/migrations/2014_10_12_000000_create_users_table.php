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
            $table->id();
            $table->string('nama');
            $table->char('jk',1)->nullable();
            $table->dateTime('tgl_lahir')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('photo')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('hints');
            $table->integer('login_tries')->nullable();
            $table->boolean('is_hidup',true)->nullable();
            $table->integer('id_status_pernikahan')->nullable();
            $table->integer('id_dapukan')->nullable();
            $table->integer('id_role')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at');
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
