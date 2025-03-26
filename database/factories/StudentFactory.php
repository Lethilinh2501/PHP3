<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->unique()->randomNumber(6),
            'name' => $this->faker->name(),
            'email' => substr($this->faker->unique()->safeEmail(), 0, 19), // Giới hạn 19 ký tự
            'phone' => $this->faker->numerify('0#########'), // Số điện thoại 10 số
            'date_of_birth' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(), // Lấy user_id hợp lệ
        ];
    }
}
