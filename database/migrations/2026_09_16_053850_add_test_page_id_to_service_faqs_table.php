<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTestPageIdToServiceFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('service_faqs', 'test_page_id')) {
            Schema::table('service_faqs', function (Blueprint $table) {
                $table->foreignId('test_page_id')->nullable()->constrained('test_pages')->cascadeOnDelete();
            });
        }
        if (\Illuminate\Support\Facades\DB::connection()->getDriverName() === 'mysql') {
            \Illuminate\Support\Facades\DB::statement('ALTER TABLE service_faqs MODIFY service_id bigint unsigned NULL');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_faqs', function (Blueprint $table) {
            $table->dropForeign(['test_page_id']);
            $table->dropColumn('test_page_id');
        });
        if (\Illuminate\Support\Facades\DB::connection()->getDriverName() === 'mysql') {
            \Illuminate\Support\Facades\DB::statement('ALTER TABLE service_faqs MODIFY service_id bigint unsigned NOT NULL');
        }
    }
}
