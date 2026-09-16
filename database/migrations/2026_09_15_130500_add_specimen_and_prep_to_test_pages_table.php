<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpecimenAndPrepToTestPagesTable extends Migration
{
    public function up()
    {
        Schema::table('test_pages', function (Blueprint $table) {
            $table->string('specimen_title')->nullable();
            $table->text('specimen_description')->nullable();
            $table->text('specimen_items')->nullable(); // stored as newline separated or json
            
            $table->string('preparation_title')->nullable();
            $table->text('preparation_description')->nullable();
            $table->text('preparation_items')->nullable(); // stored as newline separated or json
        });
    }

    public function down()
    {
        Schema::table('test_pages', function (Blueprint $table) {
            $table->dropColumn([
                'specimen_title',
                'specimen_description',
                'specimen_items',
                'preparation_title',
                'preparation_description',
                'preparation_items',
            ]);
        });
    }
}
