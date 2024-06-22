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
        $description = "Lorem Ipsum dolor Sit Amet Lorem";

        DB::table('categories')->insert([
            ['title' => 'Esportes', 'description'=> $description, 'codeName' => 'esportes'],
            ['title' => 'Eventos', 'description'=> $description, 'codeName' => 'eventos'],
            ['title' => 'Serviços', 'description'=> $description, 'codeName' => 'servicos'],
            ['title' => 'Projetos', 'description'=> $description, 'codeName' => 'projetos'],
            ['title' => 'Negocios', 'description'=> $description, 'codeName' => 'negocios'],
        ]);
    }
}
