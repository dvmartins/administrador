<?php

use Illuminate\Database\Seeder;

class MatriculasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Matricula::class, 100)->create();
    }
}
