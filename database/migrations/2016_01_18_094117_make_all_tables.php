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
            $table->timestamps();
            $table->string('title');
            $table->string('name')->nullable();
            $table->integer('category_id');
            $table->string('keywords');
            $table->boolean('display');
            $table->text('description');
            $table->mediumText('content');
            $table->integer('views')->default(0);
            $table->timestamp('modified_at')->default('0000-00-00 00:00:00');
        });

        /**
         * product tables
         */
        Schema::create('product', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('keywords');

            $table->string('cover_image');
            $table->boolean('display');
            $table->text('description');
            $table->string('gallery')
            $table->mediumText('about_content');
            
            $table->timestamp('modified_at')->default('0000-00-00 00:00:00');
        });

        /**
         * categories tables
         */
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('display_name');
            $table->text('description');
            $table->tinyInteger('sort')->default(0);
        });
        
        /**
         * tag tables
         */
        Schema::create('tags', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('display_name');
            $table->text('description');
        });

        Schema::create('model_tag', function(Blueprint $table) {
            $table->integer('model_id')->unique();
            $table->integer('tag_id');
            $table->integer('model_type')->default(0);
            $table->primary(['model_id', 'tag_id']);
        });

        /**
         * relationship between articles and products
         */
        Schema::create('model_relationship', function(Blueprint $table) {
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
    }
}
