<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $curso = new Curso();
        $curso->nombre = "Laravel";
        $curso->descripcion = "El mejor framework de php";
        $curso->categoria = "Desarrollo web";

        $curso->save();

        $curso2 = new Curso();
        $curso2->nombre = "Vue";
        $curso2->descripcion = "El mejor framework de Js";
        $curso2->categoria = "Desarrollo web";

        $curso2->save();

        $curso3 = new Curso();
        $curso3->nombre = "Visual Studio code";
        $curso3->descripcion = "El mejor framework de Java";
        $curso3->categoria = "Desarrollo web";

        $curso3->save();

    }
}
