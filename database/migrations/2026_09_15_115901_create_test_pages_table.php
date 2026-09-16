<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('bg_image')->nullable();
            $table->string('quick_info_type')->nullable();
            $table->string('quick_info_specimen')->nullable();
            $table->string('quick_info_prep')->nullable();
            $table->string('about_heading')->nullable();
            $table->text('about_text')->nullable();
            $table->string('about_image')->nullable();
            $table->string('status')->default('draft');
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
        Schema::dropIfExists('test_pages');
    }
}
