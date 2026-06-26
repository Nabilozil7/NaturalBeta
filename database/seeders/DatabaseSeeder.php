<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\seederproperti;
use Database\Seeders\UserSeeder; 
use Database\Seeders\CompanyProfileSeeder; 


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         // User::factory(10)->create();
        user::factory()->create([
        'name' => 'Admin', 
        'email' => 'test@example.com',
        'password' => bcrypt('password')]);

      
$this->call([ UserSeeder::class,
CompanyProfileSeeder::class,
seederproperti::class,
]);
    }
     

}
