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
            $table->double('booNoteAverage');
            $table->string('booCoverName', 50);
            $table->foreign('idAuthor')->references('idAuthor')->on('t_author');
            $table->foreign('idEditor')->references('idEditor')->on('t_editor');
            $table->foreign('idCategory')->references('idCategory')->on('t_category');
            $table->foreign('idUser')->references('idUser')->on('t_user');
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
