<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->truncate();
        for($i=0;$i<10;$i++){
            DB::table('articles')->insert([
                'title' => "測試title--". $i .Str::random(5),
                'content' => "測試Content--" . Str::random(255),
                'active'=> 'N'
            ]);
        }
    }
}
