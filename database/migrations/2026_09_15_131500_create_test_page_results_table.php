<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('test_pages', function (Blueprint $table) {
            $table->string('results_heading')->nullable();
            $table->text('results_text')->nullable();
        });

        Schema::create('test_page_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_page_id')->constrained('test_pages')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('test_page_results');
        
        Schema::table('test_pages', function (Blueprint $table) {
            $table->dropColumn(['results_heading', 'results_text']);
        });
    }
};
