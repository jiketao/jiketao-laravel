<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\topic_tag_relationship;
use App\Models\Tag;
use App\Models\Topic;

class topic_tag_relationshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $topics =  c2a(Topic::lists('id'));
        $tags = c2a(Tag::lists('id'));
        foreach(range(0, 30) as $index) {
            topic_tag_relationship::create([
                'topic_id' => $faker->randomElement($topics),
                'tag_id'   => $faker->randomElement($tags)
            ]);
        }
    }
}
