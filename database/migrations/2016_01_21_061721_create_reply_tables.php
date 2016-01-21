<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function(Blueprint $table){
            $table->increments('id');

            // reply user id
            $table->integer('user_id');

            // reply topic id
            $table->integer('topic_id');

            // reply content in markdown
            $table->mediumText('content');

            // reply upvotes
            $table->integer('vote_count')->index()->default(0);
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('replies');
    }
}
