<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RaceSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(VitaminSeeder::class);
        $this->call(AntibioticSeeder::class);
        $this->call(VaccineSeeder::class);
        $this->call(DewormerSeeder::class);
        $this->call(RolesSeeder::class);
        //$this->call(UserSeeder::class);
        
        
        
    }
}
