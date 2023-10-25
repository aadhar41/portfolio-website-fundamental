<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 10 ; $i++) { 
            DB::table('categories')->insert([
                'address' => fake()->address(),
                'user_id' => User::pluck('id')->random(),
            ]);
        }
    }
}
