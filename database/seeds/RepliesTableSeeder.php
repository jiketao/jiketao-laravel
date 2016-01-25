<?php

use App\Models\User;
use App\Models\Topic;
use App\Models\Reply;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RepliesTableSeeder extends Seeder
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
        $users = c2a(User::lists('id'));

        foreach (range(1, 200) as $index) {
            Reply::create([
                'topic_id'  => $faker->randomElement($topics),
                'user_id'     => $faker->randomElement($users),
                'content'     => $faker->sentence(100)
            ]);
        }
    }
}
