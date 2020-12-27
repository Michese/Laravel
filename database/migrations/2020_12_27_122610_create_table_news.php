<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('news_id')
                ->unsigned();
            $table->integer('category_id')
                ->unsigned()
                ->nullable(false);
            $table->string('title', 25)
                ->nullable(false);
            $table->string('description', 255);
            $table->text('content');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')
                ->references('category_id')
                ->on('news_category');
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
