<?php

use App\Setor;
use Illuminate\Database\Seeder;

class setorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setor::create(['name' => 'quarto']);
        Setor::create(['name' => 'sala']);
        Setor::create(['name' => 'cozinha']);
        Setor::create(['name' => 'linha infantil']);
        Setor::create(['name' => 'eletrodoméstico']);
    }
}
