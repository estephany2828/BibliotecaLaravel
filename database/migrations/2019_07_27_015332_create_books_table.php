<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // $table->bigIncrements('id');
            // $table->timestamps();
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('img');
            $table->string('autor');
            $table->string('agno');
            $table->string('isbn');
            $table->integer('disponibles');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('books');
    }
}
