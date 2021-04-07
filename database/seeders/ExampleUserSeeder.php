<?php

namespace Database\Seeders;

use Database\Factories\ExampleUserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExampleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $data = ExampleUserFactory::data();
            DB::table('users')->insert($data);
        }
    }
}
