<?php

namespace Database\Factories;

use Carbon\Carbon;
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
		return [
			'name' => [
				'en' => $this->faker->sentence(),
				'ge' => $this->faker->sentence(),
			],
			'description' => [
				'en' => $this->faker->paragraph(),
				'ge' => $this->faker->paragraph(),
			],
			'due_date'    => Carbon::now()->addDays(rand(1, 30)),
		];
	}
}
