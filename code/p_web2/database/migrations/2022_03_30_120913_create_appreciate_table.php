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
        Schema::create('t_appreciate', function (Blueprint $table) {
            $table->unsignedInteger('idBook');
            $table->unsignedInteger('idUser');
            $table->primary(['idBook','idUser']);
            $table->double('appNote');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_appreciate');
    }
};
