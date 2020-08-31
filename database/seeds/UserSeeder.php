<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'auth' => Str::random(32),
            'role' => 0,
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'doctor@gmail.com',
            'auth' => Str::random(32),
            'role' => 1,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'patient@gmail.com',
            'auth' => Str::random(32),
            'role' => 2,
            'password' => Hash::make('password'),
        ]);
    }
}
