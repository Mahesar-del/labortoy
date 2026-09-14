<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateSiteSettingsTable extends Migration {
    public function up(){ Schema::create('site_settings', function(Blueprint $table){$table->id();$table->string('key')->unique();$table->text('value')->nullable();$table->timestamps();}); foreach(['contact_address'=>'5th Street, 21st Floor, New York, USA','contact_email'=>'info@example.com','contact_phone'=>'(888) 4567890'] as $key=>$value) DB::table('site_settings')->insert(['key'=>$key,'value'=>$value,'created_at'=>now(),'updated_at'=>now()]); }
    public function down(){Schema::dropIfExists('site_settings');}
}
