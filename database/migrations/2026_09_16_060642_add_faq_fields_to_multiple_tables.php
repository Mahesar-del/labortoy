<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFaqFieldsToMultipleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('faq_heading')->nullable()->after('is_active');
            $table->text('faq_description')->nullable()->after('faq_heading');
        });

        Schema::table('test_pages', function (Blueprint $table) {
            $table->string('faq_heading')->nullable()->after('status');
            $table->text('faq_description')->nullable()->after('faq_heading');
        });

        Schema::table('tests', function (Blueprint $table) {
            $table->string('faq_heading')->nullable()->after('is_active');
            $table->text('faq_description')->nullable()->after('faq_heading');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['faq_heading', 'faq_description']);
        });

        Schema::table('test_pages', function (Blueprint $table) {
            $table->dropColumn(['faq_heading', 'faq_description']);
        });

        Schema::table('tests', function (Blueprint $table) {
            $table->dropColumn(['faq_heading', 'faq_description']);
        });
    }
}
