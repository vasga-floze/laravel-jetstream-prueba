<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');

            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('description');

            $table->timestamps();

            //validar o mas bien crear las relaciones entre las tablas
            //se esta realacionando el campo user_id con el campo id de la tabla users
            $table->foreign('user_id')->references('id')->on('users');
            //el category_id se esta relacionando con el id la tabla categories
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
        Schema::dropIfExists('courses');
    }
}
