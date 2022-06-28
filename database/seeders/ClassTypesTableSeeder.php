<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Form 1', 'code' => '1'],
            ['name' => 'Form 2', 'code' => '2'],
            ['name' => 'Form 3', 'code' => '3'],
            ['name' => 'Form 4', 'code' => '4'],
            ['name' => 'Form 5', 'code' => '5'],
            ['name' => 'Form 6', 'code' => '6'],
        ];

        DB::table('class_types')->insert($data);

    }
}
