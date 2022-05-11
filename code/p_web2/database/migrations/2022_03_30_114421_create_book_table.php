<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_book', function (Blueprint $table) {
            $table->id('idBook');
            $table->string('booTitle', 120);
            $table->integer('booNbPages');
            $table->string('booPreview', 255);
            $table->text('booResume');
            $table->date('booPublishingDate');
            $table->double('booNoteAverage')->default(0);
            $table->string('booCoverName', 255);
            $table->foreignId('idAuthor')->references('idAuthor')->on('t_author');
            $table->foreignId('idEditor')->references('idEditor')->on('t_editor');
            $table->foreignId('idCategory')->references('idCategory')->on('t_category');
            $table->foreignId('idUser')->references('idUser')->on('t_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_book');
    }
};
