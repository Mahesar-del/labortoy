<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddComponentsTextToTestPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test_pages', function (Blueprint $table) {
            $table->string('components_heading')->nullable();
            $table->text('components_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test_pages', function (Blueprint $table) {
            $table->dropColumn(['components_heading', 'components_text']);
        });
    }
}
