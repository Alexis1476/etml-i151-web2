<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user', function (Blueprint $table) {
            $table->id('idUser');
            $table->string('useNickname',60);
            $table->string('usePassword',255);
            $table->timestamp('useCreateAt');
            $table->integer('useNbBooks');
            $table->integer('useNbAppreciation');
            $table->boolean('useAdmin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user');
    }
};
