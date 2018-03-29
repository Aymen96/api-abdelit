<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 6; $i++) {
            DB::table('general')->insert([
                'title' => str_random(10).'@gmail.com',
                'description' => str_random(100),
                'url' => str_random(20),
                'urlToImage' => str_random(20),
                'publishedAt' => str_random(20),
            ]);
        }
    }
}
