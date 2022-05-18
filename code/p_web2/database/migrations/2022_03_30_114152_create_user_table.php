<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Migrations pour la table t_user
 */

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
            $table->timestamp('useCreateAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('useNbBooks')->default(0);
            $table->integer('useNbAppreciation')->default(0);
            $table->boolean('useAdmin')->default(0);
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
