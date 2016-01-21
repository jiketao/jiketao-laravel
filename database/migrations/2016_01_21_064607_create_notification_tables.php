<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');

            // from system , other users, topic update
            $table->integer('from_model_id');
            $table->integer('from_model_type');

            // reference to a reply , product, topic
            $table->integer('reference_model_id');
            $table->integer('reference_model_type');

            // user who get this notification
            $table->integer('to_user_id');

            // notification message
            $table->text('body')->nullable();

            // notification type index
            $table->string('type')->index();

            // notification readed
            $table->boolean('readed')->default(false);

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
        Schema::drop('notifications');
    }
}
