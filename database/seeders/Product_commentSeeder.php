<?php

namespace Database\Seeders;

use App\Models\Product_comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product_commentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product_comment::factory()->count(10)->create();
    }
}
