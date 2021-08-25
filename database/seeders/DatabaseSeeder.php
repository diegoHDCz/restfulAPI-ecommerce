<?php

namespace Database\Seeders;

use App\Models\Model\Product;
use App\Models\Model\Reviews;
use App\Models\User;
use Faker\Factory;
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

        User::factory()->count(5)->create();
        Product::factory()->count(50)->create();
        Reviews::factory()->count(300)->create();
    }
}
