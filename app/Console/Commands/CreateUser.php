<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'app:create-user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description';

	/**
	 * Execute the console command.
	 */
	public function handle()
	{
		$name = $this->ask('name');
		$email = $this->ask('email');
		$password = $this->secret('password');
		$validator = Validator::make([
			'name'     => $name,
			'email'    => $email,
			'password' => $password,
		], [
			'name'     => ['required', 'min:1'],
			'email'    => ['required', 'email', 'unique:users,email'],
			'password' => ['required', 'min:4'],
		]);
		User::create($validator->validated());
		$this->info("User '{$name}' created successfully with email '{$email}'.");
		return 0;
	}
}
