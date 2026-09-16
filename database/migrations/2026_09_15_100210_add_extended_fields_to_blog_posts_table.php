<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtendedFieldsToBlogPostsTable extends Migration
{
    public function up()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->string('author')->nullable();
            $table->date('publish_date')->nullable();
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->text('key_takeaways')->nullable();
            $table->string('image_alt_text')->nullable();
            
            $table->string('meta_title')->nullable();
            $table->string('meta_robots')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('schema_json')->nullable();
            
            $table->boolean('show_on_home')->default(false);
            $table->boolean('feature_on_home')->default(false);
        });
    }

    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropColumn([
                'author', 'publish_date', 'category', 'tags',
                'key_takeaways', 'image_alt_text',
                'meta_title', 'meta_robots', 'meta_description', 'meta_keywords', 'schema_json',
                'show_on_home', 'feature_on_home'
            ]);
        });
    }
}
