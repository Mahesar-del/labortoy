<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class AddHeroFieldsToServicesTable extends Migration {
    public function up(){Schema::table('services',function(Blueprint $table){$table->string('hero_heading')->nullable()->after('name');$table->text('hero_description')->nullable()->after('summary');$table->string('button_text')->nullable()->after('hero_description');$table->string('button_link')->nullable()->after('button_text');});}
    public function down(){Schema::table('services',function(Blueprint $table){$table->dropColumn(['hero_heading','hero_description','button_text','button_link']);});}
}
