<?php

use App\Models\Product;
use App\Models\Categories;
use App\Models\Topic;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categories = Categories::where('parent_id', '>=', 0)->get();

        $cate_ids = [];
        foreach($categories as $category) {
            $cate_ids[] = $category->id;
        }

        foreach (range(1, 100) as $index) {
            $name = $faker->name;
            $description = $faker->sentence(10);
            $product = Product::create([
                'name'        => $name,
                'slug'        => $name,
                'description' => $description,
                'keywords'    => $faker->sentence(5),
                'cover'       => $faker->imageUrl,
                'category_id' => $faker->randomElement($cate_ids),
                'user_id'     => 0 // admin
             ]);

            $detailTopic = Topic::create([
                'title'       => $name.'详情',
                'slug'        => $name,
                'product_id'  => $product->id,
                'user_id'     => 0,
                'keywords'    => $name,
                'description' => $description,
                'content'     => $faker->sentence(100),
                'is_product_detail_topic' => true
            ]);

            $product->detail_topic_id = $detailTopic->id;
            $product->save();
        }
    }
}
