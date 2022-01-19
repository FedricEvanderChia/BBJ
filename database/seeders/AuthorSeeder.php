<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            ['name' => 'Jim Kwik'],
            ['name' => 'Morgan Housel'],
            ['name' => 'Daniel Kahnmen'],
            ['name' => 'Yuval Noah Harari'],
            ['name' => 'Mark Manson'],
            ['name' => 'Simon Sinek'],
            ['name' => 'Mark Manson'],
            ['name' => 'Aurelien Geron'],
            ['name' => 'Robert C. Martin'],
            ['name' => 'Phil Knight'],
            ['name' => 'Ashlee Vance'],
            ['name' => 'Satya Nadella'],
            ['name' => 'Bill Gates'],
            ['name' => 'Walter Isaacson'],
            ['name' => 'James Clear']
        ]);
    }
}
