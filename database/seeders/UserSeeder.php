<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::truncate();

        $faker = \Faker\Factory::create();
        $password = bcrypt('password');

        User::create([
            'name'     => $faker->name,
            'email'    => 'graphql@test.com',
            'password' => $password,
        ]);

        for ($i = 0; $i < 10; ++$i) {
            User::create([
                'name'     => $faker->name,
                'email'    => $faker->email,
                'password' => $password,
            ]);
        }

    }
}
