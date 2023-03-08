<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\ContactSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([DepartmentsSeeder::class]);
        $this->call([ContactSeeder::class]);
    }
}
