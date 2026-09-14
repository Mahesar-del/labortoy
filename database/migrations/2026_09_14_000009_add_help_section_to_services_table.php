<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHelpSectionToServicesTable extends Migration
{
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('help_heading')->nullable()->after('hero_image');
            $table->text('help_description')->nullable()->after('help_heading');
            $table->text('help_cards')->nullable()->after('help_description');
        });
    }

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['help_heading', 'help_description', 'help_cards']);
        });
    }
}
