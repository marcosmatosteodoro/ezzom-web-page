<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['title' => 'Esportes', 'codeName' => 'esportes'],
            ['title' => 'Eventos', 'codeName' => 'eventos'],
            ['title' => 'Serviços', 'codeName' => 'servicos'],
            ['title' => 'Projetos', 'codeName' => 'projetos'],
            ['title' => 'Negocios', 'codeName' => 'negocios'],
        ]);
    }
}
