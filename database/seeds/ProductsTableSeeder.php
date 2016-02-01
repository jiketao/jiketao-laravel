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

        $baseUrl = 'http://7xkn9n.com1.z0.glb.clouddn.com/img/';
        $string = file_get_contents(__DIR__."/../data/products.json");
        $products = json_decode($string, true);

        $cate_ids = [];
        foreach($categories as $category) {
            $cate_ids[] = $category->id;
        }


        foreach($products as $productData) {
            try {
                $name = $productData['meta']['title'];
                $content = '';
                if (isset($productData['content'])) {
                    $content = str_replace('<h2 class="title">百科词条</h2>', '', $productData['content']);
                }
                $klass = $productData['meta']['class']['text'];
                $category = Categories::where('name', $klass)->get();
                $description = substr($content, 0, 100);

                $cid = $faker->randomElement($cate_ids);
                if ($category->count() == 1) {
                    $cid = $category[0]->id;
                }

                $pieces = preg_split("/\//i", $productData['meta']['image']);

                $product = Product::create([
                    'name'        => $name,
                    'slug'        => $name,
                    'description' => $description,
                    'keywords'    => $klass,
                    'cover'       => $baseUrl.$pieces[count($pieces) - 1],
                    'category_id' => $cid,
                    'user_id'     => 1 // admin
                 ]);

                $detailTopic = Topic::create([
                    'title'       => $name,
                    'slug'        => $name,
                    'product_id'  => $product->id,
                    'user_id'     => 1,
                    'keywords'    => $name,
                    'description' => $description,
                    'content'     => $content,
                    'is_product_detail_topic' => true
                ]);

                $product->detail_topic_id = $detailTopic->id;
                $product->save();
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
}
