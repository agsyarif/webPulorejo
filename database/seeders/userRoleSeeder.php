<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            ['role' => 'Developer', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'Bloger', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
