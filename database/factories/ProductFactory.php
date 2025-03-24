<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'product_price' => $this->faker->randomFloat(2, 1, 100),
            'vote' => '0', // Thêm giá trị mặc định
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            // 'image' => $this->faker->url,

        ];
    }
}
