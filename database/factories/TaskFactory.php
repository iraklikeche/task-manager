<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::first();


        return [
            'user_id' => $user->id,
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'due_date' => "2024-03-01",
        ];
    }
}
