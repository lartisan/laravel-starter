<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name' => 'Admin',
			'email' => 'admin@example.com',
			'email_verified_at' => now(),
			'password' => Hash::make('password123'),
			'remember_token' => Str::random(10),
		]);
	}
}
