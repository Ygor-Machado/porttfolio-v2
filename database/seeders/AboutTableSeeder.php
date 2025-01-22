<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            [
                'description' => 'Desenvolvedor PHP |Laravel com experiência e atuação em desenvolver e fazer manutenção em plataforma de curso, iniciei no desenvolvimento em 2022 junto com a faculdade de Análise e Desenvolvimento de Sistemas na Fatec Franca e busco aprendizado dia após dia. Possuo foco em desenvolvimento em PHP,Laravel,Twig,Slim4 e MySql, estou aprendendo sobre as tecnologias de front-end como JavaScript e React.'
            ],
        ]);
    }
}
