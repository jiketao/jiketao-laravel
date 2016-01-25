<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $tables = [
        'users',
        'categories',
        'products',
        'topics',
        'replies',
        'tags',
        'topic_tag_relationships'
    ];

    protected  $seeders = [
        'UsersTableSeeder',
        'CategoriesTableSeeder',
        'ProductsTableSeeder',
        'TopicsTableSeeder',
        'RepliesTableSeeder',
        'TagsTableSeeder',
        'topic_tag_relationshipsTableSeeder'
    ];

    public function run()
    {
        // $this->call(UserTableSeeder::class);
        Eloquent::unguard();

        $this->cleanDatabase();

        foreach ($this->seeders as $seedClass) {
            $this->call($seedClass);
        }
    }


    /**
     * Clean out database
     */
    public function cleanDatabase() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
