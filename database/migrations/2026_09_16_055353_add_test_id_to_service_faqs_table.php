<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTestIdToServiceFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('test_id')->nullable()->after('test_page_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_faqs', function (Blueprint $table) {
            $table->dropColumn('test_id');
        });
    }
}
