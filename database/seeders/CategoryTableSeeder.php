<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
               'name' => 'Laravel',
            ],
            [
                'name' => 'Laravel Sanctum',
            ],
            [
                'name' => 'Laravel Sail',
            ],
            [
                'name' => 'PHP',
            ],
            [
                'name' => 'Vue.js',
            ],
            [
                'name' => 'React',
            ],
            [
                'name' => 'Tailwind CSS',
            ],
            [
                'name' => 'Bootstrap',
            ],
            [
                'name' => 'MySQL',
            ],

        ]);
    }
}
