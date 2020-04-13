<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(PetugasSeeder::class);
        $this->call(UserSeeder::class);

    }
}
