<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerjaans')->insert([
            ['pekerjaan' => 'Petani'],
            ['pekerjaan' => 'Guru'],
            ['pekerjaan' => 'PNS'],
            ['pekerjaan' => 'Swasta'],
            ['pekerjaan' => 'Wiraswasta'],
            ['pekerjaan' => 'Pengusaha'],
        ]);
    }
}
