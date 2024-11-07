<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Career;
use App\Models\Company;
use App\Models\Cv;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();
        Company::factory(5)->create();
        Career::factory(10)->create();
        Application::factory(8)->create();
        Cv::factory(8)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
