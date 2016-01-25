<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $colors = [
            '#B3B5B4',
            '#25AAE2',
            '#AB9364',
            '#92278F',
            '#0E76BD',
            '#F7941D',
            '#3AB54A',
            '#808281'
        ];
        foreach(range(0, 30) as $index) {
            $name = $faker->word;
            Tag::create([
                'name' => $name,
                'slug' => $name,
                'description' => $faker->sentence,
                'topic_count' => 0,
                'color' => $faker->randomElement($colors)
            ]);
        }
    }
}

