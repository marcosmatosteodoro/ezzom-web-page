<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = DB::table('news')->pluck('id')->toArray();

        DB::table('headlines')->insert([
            [
                'position' => 1,
                'news_id' => $news['0'],
            ],
            [
                'position' => 2,
                'news_id' => $news['10'],
            ],
            [
                'position' => 3,
                'news_id' => $news['3'],
            ],
            [
                'position' => 4,
                'news_id' => $news['14'],
            ],
            [
                'position' => 5,
                'news_id' => $news['18'],
            ],
        ]);
    }
}
