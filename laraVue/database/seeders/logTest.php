<?php

namespace Database\Seeders;

use App\Models\LogTest as ModelsLogTest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class logTest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsLogTest::create([
            'description' => 'log container seeders'
        ]);


    }
}
