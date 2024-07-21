<?php

namespace Database\Seeders;

use App\Models\Orders_detal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Orders_detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Orders_detal::factory()->count(10)->create();
    }
}
