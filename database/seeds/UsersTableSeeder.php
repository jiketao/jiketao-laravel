<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            User::create([
                'name'      => $faker->name,
                'password'  => $faker->password,
                'email'     => $faker->email,
                'city'      => $faker->word,
                'avatar'    => $faker->imageUrl(100, 100, 'cats'),
                'introduction' => $faker->sentence(30),
                'signature' => $faker->word
            ]);
        }
    }
}
