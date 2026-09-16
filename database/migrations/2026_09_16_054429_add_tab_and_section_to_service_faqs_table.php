<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTabAndSectionToServiceFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_faqs', function (Blueprint $table) {
            $table->string('tab_name')->nullable();
            $table->string('section_heading')->nullable();
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
            $table->dropColumn(['tab_name', 'section_heading']);
        });
    }
}
