<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /**
         * user tables
         */
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });

        /**
         * article tables
         */
        Schema::create('articles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('name')->nullable();
            $table->integer('category_id');

            $table->string('keywords');
            $table->text('description');
            $table->mediumText('content');
            $table->string('cover')->nullable();
            $table->integer('pin')->default(0);

            $table->boolean('display');
            $table->timestamp('modified_at')->default('0000-00-00 00:00:00');
            $table->timestamps();
        });

        /**
         * product tables
         */
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('keywords');

            $table->string('cover');
            $table->text('description');
            $table->string('gallery');
            $table->mediumText('about_content');
            
            $table->boolean('display');
            $table->timestamp('modified_at')->default('0000-00-00 00:00:00');
            $table->timestamps();
        });

        /**
         * categories tables
         */
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name');
            $table->text('description');
            $table->tinyInteger('sort')->default(0);
            $table->timestamps();
        });

        /**
         * tag tables
         */
        Schema::create('tags', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('model_tags', function(Blueprint $table) {
            $table->integer('model_id')->unique();
            $table->integer('tag_id');
            $table->integer('model_type')->default(0);
            $table->primary(['model_id', 'tag_id']);
        });

        /**
         * relationship between articles and products
         */
        Schema::create('model_relationships', function(Blueprint $table) {
            $table->integer('model_id')->unique();
            $table->integer('relate_id');
            $table->integer('model_type')->default(0);
            $table->primary(['model_id', 'relate_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('password_resets');
        Schema::drop('articles');
        Schema::drop('products');
        Schema::drop('categories');
        Schema::drop('tags');
        Schema::drop('model_tags');
        Schema::drop('model_relationships');
    }
}
