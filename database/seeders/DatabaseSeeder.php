<?php

namespace Database\Seeders;

use App\Models\tarea;
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
        $this->call(TablaUsuariosSeeder::class);
        $this->call(tareaSeeder::class);
    }
}
