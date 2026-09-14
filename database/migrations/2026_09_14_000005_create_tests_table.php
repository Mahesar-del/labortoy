<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateTestsTable extends Migration { public function up(){Schema::create('tests',function(Blueprint $table){$table->id();$table->unsignedBigInteger('service_id');$table->string('name');$table->string('heading')->nullable();$table->text('description')->nullable();$table->string('image_path')->nullable();$table->boolean('is_active')->default(true);$table->timestamps();$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');});}public function down(){Schema::dropIfExists('tests');}}
