<?php

use Illuminate\Database\Seeder;

class ContenidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contenido::class, 5)->create();
    }
}
