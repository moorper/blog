<?php

use Illuminate\Database\Seeder;

class CategoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Category::insert([
            'name' => str_random(8),
        ]);
    }
}
