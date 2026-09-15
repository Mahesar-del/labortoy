<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqCategoriesAndItemsTables extends Migration
{
    public function up()
    {
        Schema::create('faq_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('faq_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faq_category_id');
            $table->text('question');
            $table->text('answer');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('faq_category_id')->references('id')->on('faq_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('faq_items');
        Schema::dropIfExists('faq_categories');
    }
}
