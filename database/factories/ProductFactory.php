<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'product_price' => $this->faker->randomFloat(2, 10, 1000), // Đảm bảo có giá trị
            'image' => $this->faker->imageUrl(),
            'vote' => $this->faker->randomElement(['5', '4', '3', '2', '1']),
            'category_id' => Category::inRandomOrder()->value('id') ?? Category::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
