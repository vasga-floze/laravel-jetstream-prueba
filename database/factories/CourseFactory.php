<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //definir estructura de datos falsos a insertar
            'name'=>$this->faker->sentence,
            'slug'=>$this->faker->slug,
            'image'=>$this->faker->imageUrl(1280, 720), //entre parentesis van la cantidad de caracteres
            'description'=>$this->faker->text(800),
            
            //campos de la relacion
            'user_id'=> rand(1,5),
            'category_id'=>rand(1,3),
        ];
    }
}
