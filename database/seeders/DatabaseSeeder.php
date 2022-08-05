<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UserSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PeriodSeeder::class);

        $this->call(PropertySeeder::class);


        $this->call(RealStateSeeder::class);
        $this->call(FavoriteSeeder::class);
        $this->call(ServiceSeeder::class);




        $this->call(SavedRecordSeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
