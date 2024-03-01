<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as GeorgianFactory;

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
				'ka' => GeorgianFactory::create('ka_GE')->realText(10),
			],
			'description' => [
				'en' => $this->faker->paragraph(),
				'ka' => GeorgianFactory::create('ka_GE')->realText(10),
			],
			'due_date'    => Carbon::now()->addDays(rand(1, 30)),
		];
	}
}
