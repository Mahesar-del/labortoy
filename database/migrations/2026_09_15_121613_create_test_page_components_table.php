<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestPageComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_page_components', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_page_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();

            $table->foreign('test_page_id')->references('id')->on('test_pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_page_components');
    }
}
