<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('hero_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('heading');
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->string('primary_button_text')->nullable();
            $table->string('primary_button_link')->nullable();
            $table->string('secondary_button_text')->nullable();
            $table->string('secondary_button_link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hero_settings');
    }
}
