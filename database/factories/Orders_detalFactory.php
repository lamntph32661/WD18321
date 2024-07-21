<?php

namespace Database\Factories;

use App\Models\Orders;
use App\Models\Orders_detal;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders_detal>
 */
class Orders_detalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Products::all()->random();
        return [
            'order_id'=>Orders::all()->random()->order_id,
            'created_at'=>$this->faker->dateTime,
            'updated_at'=>$this->faker->dateTime,
            'product_id'=>$product->product_id,
            'price'=>$product->price,
            // 'quantity'=>$this->faker->randomNumber(),
        ];
    }
}
