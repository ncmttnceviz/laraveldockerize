<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('tr_TR');

        for ($i=0; $i < 100 ; $i++) { 
            DB::table('tests')->insert([
                'title' => $faker->name,
                'text' => $faker->text
            ]);
        }
    }
}
