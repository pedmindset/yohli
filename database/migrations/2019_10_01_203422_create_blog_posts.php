<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->BigInteger('user_id')->index()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title')->nullable();
            $table->string('featured')->nullable();
            $table->bigInteger('count')->nullable();
            $table->text('body')->nullable();
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
        Schema::dropIfExists('blog_posts');
    }
}
