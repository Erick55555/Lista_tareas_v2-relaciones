<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tarea;
use App\Models\usuario;

class tareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarea = new tarea;
        $tarea->nombre = "trabajar";
        $tarea->usuario_id = usuario::find(1)->id;
        $tarea->save();

        $tarea2 = new tarea;
        $tarea2->nombre = "descansar";
        $tarea2->usuario_id = usuario::find(2)->id;
        $tarea2->save();

        $tarea3 = new tarea;
        $tarea3->nombre = "dormir";
        $tarea3->usuario_id = usuario::find(3)->id;
        $tarea3->save();
    }
}
