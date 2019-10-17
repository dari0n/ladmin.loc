<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            //url path without domain
            $table->string('path')->nullable();

            $table->integer('metatagable_id')->nullable();
            $table->string('metatagable_type')->nullable();

            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();

            //seo fields
            $table->string('h1')->nullable();
            $table->text('seo_text')->nullable();
            $table->string('canonical')->nullable();
            $table->string('robots',50)->nullable();

            //for build sitemap.xml
            $table->string('changefreq',10)->nullable();
            $table->string('priority',10)->nullable();

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
        Schema::dropIfExists('meta_tags');
    }
}
