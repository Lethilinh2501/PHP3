<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ProductCommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'userId'     => User::all()->random()->id,
            'productId'  => Product::all()->random()->id,
            'comment'    => $this->faker->text,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        ];
    }
}
