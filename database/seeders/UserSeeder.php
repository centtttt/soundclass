<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        User::create([
            'name' => 'John Williams',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Male',
        ]);
        User::create([
            'name' => 'Sarah Johnson',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Female',
        ]);
        User::create([
            'name' => 'Olivia Brown',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Female',
        ]);
        User::create([
            'name' => 'Emily Roberts',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Female',
        ]);
        User::create([
            'name' => 'Alex Martinez',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Male',
        ]);
        User::create([
            'name' => 'Lucas Hernandez',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Male',
        ]);
        User::create([
            'name' => 'Naomi Lee',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Female',
        ]);
        User::create([
            'name' => 'Michael Brown',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Male',
        ]);
        User::create([
            'name' => 'Aisha Khan',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Female',
        ]);
        User::create([
            'name' => 'Oliver Smith',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Male',
        ]);
        User::create([
            'name' => 'Andy Guitar',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'Male',
        ]);
    }
}
