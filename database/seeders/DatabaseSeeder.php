<?php

namespace Database\Seeders;

//hacemos referencia a las entidades a usar
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Aqui decimos, usa eesta entidad para crear tantos datos falsos
        //creamos 5 usuarios
        User::factory(5)->create();
        //creamos 3 categorias, es importante la jerarquia 
        Category::factory(3)->create();
        Course::factory(10)->create();
        Post::factory(90)->create();
    }
}
