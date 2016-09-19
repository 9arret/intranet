<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryWikiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_wiki', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 64);
            $table->string('alias', 64)->unique();
            $table->tinyInteger('status')->comment('published=1 unpublished=0');
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
        Schema::drop('category_wiki');
    }
}
