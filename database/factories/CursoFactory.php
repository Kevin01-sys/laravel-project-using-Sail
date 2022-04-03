<?php
//php artisan make:factory CursoFactory --model=Curso
namespace Database\Factories;

//use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->sentence(),
            'descripcion' =>$this->faker->paragraph(),
            'categoria' =>$this->faker->randomElement(['Desarrollo web','Diseño web'])
        ];
    }
}
