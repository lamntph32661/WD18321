<?php

namespace Database\Seeders;

use App\Models\Product_comment;
use Database\Seeders\UsersSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // UsersSeeder::class,
            // ProductSeeder::class,
            // Product_commentSeeder::class
            ProductsSeeder::class,
            OrdersSeeder::class,
            Orders_detailSeeder::class,
        ]);
    }
}
