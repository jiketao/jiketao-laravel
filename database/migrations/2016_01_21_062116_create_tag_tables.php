<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function(Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->text('description');
            $table->timestamps();

            $table->integer('topic_count')->default(0);
        });

        Schema::create('topic_tag_relationship', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id');
            $table->integer('tag_id');
            $table->integer('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tags');
        Schema::drop('topic_tag_relationship');
    }
}
