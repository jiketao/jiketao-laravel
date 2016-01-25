<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function(Blueprint $table) {
            $table->increments('id');

            // topic title
            $table->string('title');

            // topic alias slug in url
            $table->string('slug')->nullable();

            // topic category
            $table->integer('category_id')->nullable();

            // topic product
            // every topic belongs to a product
            $table->integer('product_id');

            $table->integer('user_id');

            // every product has a product descrption topic
            $table->boolean('is_product_detail_topic')->default(false);

            // topic keywords for SEO
            $table->string('keywords')->default('');

            // topic short description
            $table->text('description');

            // topic full content in markdown
            $table->mediumText('content');

            // pined topic has higher priority
            $table->integer('pin')->default(0);

            // topic page views
            $table->integer('page_view_count')->default(0)->index();

            $table->integer('reply_count')->default(0)->index();

            // topic vote count
            $table->integer('vote_count')->default(0)->index();

            // topic hidden
            $table->boolean('display')->default(true);

            $table->softDeletes();

            // topic timestamps create_at
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('topics');
    }
}
