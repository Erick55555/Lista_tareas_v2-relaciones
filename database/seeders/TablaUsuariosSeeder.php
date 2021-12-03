<?php

namespace Database\Seeders;

use App\Models\tarea;
use App\Models\usuario;
use Illuminate\Database\Seeder;

class TablaUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $usuario = new usuario;
        $usuario->nombre = "Erick";
        $usuario->apellido = "Ibanez";
        $usuario->save();

        $usuario2 = new usuario;
        $usuario2->nombre = "Adrian";
        $usuario2->apellido = "Garcia";
        $usuario2->save();

        $usuario3 = new usuario;
        $usuario3->nombre = "Gorka";
        $usuario3->apellido = "Larrañaga";
        $usuario3->save();
    }
}
