<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->string('author', 255);
            $table->year('year');
            $table->string('publisher', 255);
            $table->string('city', 255);
            $table->string('cover', 255);
            $table->unsignedBigInteger('bookshelf_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('bookshelf_id')->references('id')->on('bookshelfs');
            $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
