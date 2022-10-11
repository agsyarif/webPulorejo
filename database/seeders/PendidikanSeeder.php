<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidikans')->insert(
            [
                [
                    'pendidikan' => 'Tidak / belum Sekolah'
                ],
                [
                    'pendidikan' => 'Tidak Tamat SD / Sederajat'
                ],
                [
                    'pendidikan' => 'Tamat SD / Sederajat'
                ],
                [
                    'pendidikan' => 'SLTP / Sederajat'
                ],
                [
                    'pendidikan' => 'SLTA / Sederajat'
                ],
                [
                    'pendidikan' => 'Diloma I/II'
                ],
                [
                    'pendidikan' => 'Akademi / Diploma III'
                ],
                [
                    'pendidikan' => 'Diploma IV / Strata I'
                ],
                [
                    'pendidikan' => 'Strata II'
                ],
                [
                    'pendidikan' => 'Strata III'
                ]
            ]
        );
    }
}
