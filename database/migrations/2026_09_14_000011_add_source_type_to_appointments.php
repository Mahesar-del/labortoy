<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
class AddSourceTypeToAppointments extends Migration { public function up(){Schema::table('appointments',function(Blueprint $table){$table->string('source_type')->default('patient')->after('patient_name');});} public function down(){Schema::table('appointments',function(Blueprint $table){$table->dropColumn('source_type');});} }
