<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableForParser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parser', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->nullable();
            $table->string('link',255)->nullable();
            $table->string('guid',255)->nullable();
            $table->string('description',255)->nullable();
            $table->timestamp('pubDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parser');
    }
}
