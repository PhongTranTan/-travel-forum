<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->integer('view')->default(0);
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
