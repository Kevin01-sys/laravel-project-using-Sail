<?php
// php artisan make:seeder CursoSeeder # command used to created this file 
namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso->name = "Laravel";
        $curso->descripcion = "El mejor framework de PHP";
        $curso->categoria = "Desarrollo web";

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = "Django";
        $curso2->descripcion = "El mejor framework de PYTHON";
        $curso2->categoria = "Desarrollo web";

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "React";
        $curso3->descripcion = "La mejor libreria de Javascript";
        $curso3->categoria = "Desarrollo web";

        $curso3->save();
    }
}
