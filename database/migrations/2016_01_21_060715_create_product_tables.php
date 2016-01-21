<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');

            // product name
            $table->string('name');

            // product discription
            $table->text('description');

            // product keywords for SEO
            $table->string('keywords');

            // product cover image
            $table->string('cover');

            // product category
            $table->integer('category_id');

            // product visible
            $table->boolean('display');

            // product detail topic id
            $table->integer('detail_topic_id');

            // product timestamps
            $table->timestamp('modified_at')->default('0000-00-00 00:00:00');
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
        Schema::drop('products');
    }
}
