<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            //un post va a pertenecer a un curso
            $table->unsignedBigInteger('course_id');

            $table->string('name');
            //un booleano para sabre si la leccion es gratis o no
            $table->boolean('free')->default(0); //por default en cero, que no es gratuita

            $table->timestamps();

            //relaciones entre las tablas
            //se esta realacionando el campo course_id con el campo id de la tabla courses
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
