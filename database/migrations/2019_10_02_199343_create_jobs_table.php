<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('industry_id')->nullable()->unsigned();
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('job_budget_id')->unsigned()->nullable();
            $table->foreign('job_budget_id')->references('id')->on('job_budgets');
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('custom_budget')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
