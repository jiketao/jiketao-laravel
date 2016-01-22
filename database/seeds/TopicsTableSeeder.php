<?php

use App\Models\Product;
use App\Models\Topic;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

function c2a($collection) {
    $arr = [];
    foreach($collection as $it) {
        $arr[] = $it;
    }
    return $arr;
}

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $products =  c2a(Product::lists('id'));
        $users = c2a(User::lists('id'));

        foreach (range(1, 200) as $index) {
            Topic::create([
                'title'       => $faker->sentence(6),
                'slug'        => $faker->name,
                'product_id'  => $faker->randomElement($products),
                'user_id'     => $faker->randomElement($users),
                'keywords'    => $faker->sentence,
                'description' => $faker->sentence(10),
                'content'     => $faker->sentence(100)
            ]);
        }

    }
}
