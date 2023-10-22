<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 50 ; $i++) { 
            DB::table('posts')->insert([
                'title' => Str::random(20),
                'description' => Str::random(200),
                'status' => 1,
                'publish_date' => date('Y-m-d'),
                'user_id' => 1,
            ]);
        }
    }
}
