<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id('id');
            $table->integer('category_id');
            $table->string('title', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('author', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp ('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
