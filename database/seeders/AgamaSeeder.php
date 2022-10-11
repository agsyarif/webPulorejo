<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agamas')->insert([
            ['agama' => 'Islam'],
            ['agama' => 'Kristen'],
            ['agama' => 'Protestan'],
            ['agama' => 'Katolik'],
            ['agama' => 'Hindu'],
        ]);
    }
}
