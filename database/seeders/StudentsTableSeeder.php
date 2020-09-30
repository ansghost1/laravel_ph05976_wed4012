<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use DB de co the su dung cac phuong thuc trong no
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('students')->count() === 0) {
            DB::table('students')->insert([
                [
                    'name' => 'Nguyen Van A',
                    'phone' => '0123123123',
                    'age' => 20,
                    'gender' => 1,
                    'address' => 'HN',
                    'is_active' => true,
                ],
                [
                    'name' => 'Nguyen Van B',
                    'phone' => '0123123564',
                    'age' => 22,
                    'gender' => 0,
                    'address' => 'BN',
                    'is_active' => false,
                ],
            ]);
        } else {
            echo 'Bang students da co du lieu' . PHP_EOL;
        }
    }
}
