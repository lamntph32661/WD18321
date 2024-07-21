<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::all()->random()->user_id,
            'created_at'=>$this->faker->dateTime,
            'updated_at'=>$this->faker->dateTime,
            'totalPrice'=>$this->faker->randomFloat(2,1,100),
        ];
    }
}
