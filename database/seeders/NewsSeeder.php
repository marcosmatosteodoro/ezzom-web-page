<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = DB::table('categories')->pluck('id', 'codeName')->toArray();
        $title = 'Lorem Ipsum dolor Sit Amet Dolor lorem ipsum';
        $createdAt = '2023-04-10 00:00:00';

        DB::table('news')->insert([
            [
                'title' => $title,
                'category_id' => $categories['esportes'],
                'cover' => '/images/esportes/image1.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['esportes'],
                'cover' => '/images/esportes/image2.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['esportes'],
                'cover' => '/images/esportes/image3.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['esportes'],
                'cover' => '/images/esportes/image4.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['eventos'],
                'cover' => '/images/eventos/image1.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['eventos'],
                'cover' => '/images/eventos/image2.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['eventos'],
                'cover' => '/images/eventos/image3.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['servicos'],
                'cover' => '/images/servicos/image1.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['servicos'],
                'cover' => '/images/servicos/image2.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['servicos'],
                'cover' => '/images/servicos/image3.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['servicos'],
                'cover' => '/images/servicos/image4.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['projetos'],
                'cover' => '/images/projetos/image1.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['projetos'],
                'cover' => '/images/projetos/image2.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['projetos'],
                'cover' => '/images/projetos/image3.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['projetos'],
                'cover' => '/images/projetos/image4.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['negocios'],
                'cover' => '/images/negocios/image1.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['negocios'],
                'cover' => '/images/negocios/image2.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['negocios'],
                'cover' => '/images/negocios/image3.jpeg',
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['negocios'],
                'cover' => '/images/negocios/image4.jpeg',
                'created_at' => $createdAt
            ],
        ]);
    }
}
