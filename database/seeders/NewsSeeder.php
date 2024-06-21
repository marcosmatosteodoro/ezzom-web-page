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
                'cover' => '/esportes/image1.jpeg',
                'headline' => true,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['esportes'],
                'cover' => '/esportes/image2.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['esportes'],
                'cover' => '/esportes/image3.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['esportes'],
                'cover' => '/esportes/image4.jpeg',
                'headline' => true,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['eventos'],
                'cover' => '/eventos/image1.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['eventos'],
                'cover' => '/eventos/image2.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['eventos'],
                'cover' => '/eventos/image3.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['servicos'],
                'cover' => '/servicos/image1.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['servicos'],
                'cover' => '/servicos/image2.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['servicos'],
                'cover' => '/servicos/image3.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['servicos'],
                'cover' => '/servicos/image4.jpeg',
                'headline' => true,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['projetos'],
                'cover' => '/projetos/image1.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['projetos'],
                'cover' => '/projetos/image2.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['projetos'],
                'cover' => '/projetos/image3.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['projetos'],
                'cover' => '/projetos/image4.jpeg',
                'headline' => true,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['negocios'],
                'cover' => '/negocios/image1.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['negocios'],
                'cover' => '/negocios/image2.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['negocios'],
                'cover' => '/negocios/image3.jpeg',
                'headline' => false,
                'created_at' => $createdAt
            ],
            [
                'title' => $title,
                'category_id' => $categories['negocios'],
                'cover' => '/negocios/image4.jpeg',
                'headline' => true,
                'created_at' => $createdAt
            ],
        ]);
    }
}
