<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('subjects')->count() === 0) {
            DB::table('subjects')->insert([
                [
                    'name' => 'Laravel',
                    'time' => '2020-02-10',
                    'is_active' => 1,
                ],
                [
                    'name' => 'JS',
                    'time' => '2020-03-28',
                    'is_active' => 0,
                ],
            ]);
        } else {
            echo 'Bang subjects da co du lieu' . PHP_EOL;
        }
    }
}
