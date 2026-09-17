<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeoFieldsToServicesAndTestPages extends Migration
{
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('meta_title')->nullable()->after('slug');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->text('meta_keywords')->nullable()->after('meta_description');
        });

        Schema::table('test_pages', function (Blueprint $table) {
            $table->string('meta_title')->nullable()->after('slug');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->text('meta_keywords')->nullable()->after('meta_description');
        });
    }

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['meta_title', 'meta_description', 'meta_keywords']);
        });

        Schema::table('test_pages', function (Blueprint $table) {
            $table->dropColumn(['meta_title', 'meta_description', 'meta_keywords']);
        });
    }
}
