<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recepts')->insert([
            'opisRecepta' => 'Torta sa malinama',
            'user_id' => 3,
        ]);

    }
}
