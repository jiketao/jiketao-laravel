<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            // base information
            $table->string('name');
            $table->string('email')->unique()->nullable()->index();
            $table->string('password', 60);
            $table->string('avatar')->nullable();
            $table->string('introduction')->nullable();
            $table->string('city')->nullable();

            // tokens and signatures
            $table->string('signature')->nullable();
            $table->rememberToken();
            $table->timestamp('last_login_time')->default('0000-00-00 00:00:00');
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('is_banned')->default(false)->index();

            // third party integritation
            $table->integer('weibo_id')->index();
            $table->string('weibo_url');
            $table->integer('qq_id')->index();
            $table->string('qq_url');
            $table->integer('wechat_id')->index();
            $table->string('wechat_url');

            // statistic
            $table->integer('topic_count')->default(0);
            $table->integer('reply_count')->default(0);
            $table->integer('notification_count')->default(0);

            // user settings
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
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
    }
}
