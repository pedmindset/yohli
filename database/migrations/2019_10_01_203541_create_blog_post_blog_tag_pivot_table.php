<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogPostBlogTagPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post_blog_tag', function (Blueprint $table) {
            $table->integer('blog_post_id')->unsigned()->index();
            $table->foreign('blog_post_id')->references('id')->on('blog_posts')->onDelete('cascade');
            $table->integer('blog_tag_id')->unsigned()->index();
            $table->foreign('blog_tag_id')->references('id')->on('blog_tags')->onDelete('cascade');
            $table->primary(['blog_post_id', 'blog_tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_post_blog_tag');
    }
}
