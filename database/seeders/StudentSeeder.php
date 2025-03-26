<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::pluck('id')->toArray(); // Lấy danh sách ID của users

        Student::factory(10)->create([
            'user_id' => fn() => $users[array_rand($users)], // Gán user_id hợp lệ
        ]);
    }
}
