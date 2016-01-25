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

        User::create([
            'name'     => 'admin',
            'password' => 'admin_6174',
            'email'    => 'admin@geeektao.com',
            'avatar'   => $faker->imageUrl(100, 100, 'cats'),
            'introduction' => 'geeektao admin',
            'signature' => 'asiojoiqrq2391aasdfa'
        ]);
        foreach (range(1, 10) as $index) {
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
