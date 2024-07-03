<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animais')->insert([
            [
                'nome' => 'Abacaxi',
                'idade' => 8
            ],
            [
                'nome' => 'Batata',
                'idade' => 3
            ]
        ]);
    }
}
