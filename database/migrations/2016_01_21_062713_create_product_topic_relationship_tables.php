<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTopicRelationshipTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_relationships', function(Blueprint $table) {
            $table->integer('model_id');
            $table->integer('relate_id');
            $table->integer('model_type');
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
        Schema::drop('model_relationships');
    }
}
