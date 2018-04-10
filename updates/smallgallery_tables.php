<?php namespace JanVince\SmallGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class SmallGalleryTables extends Migration
{
    public function up()
    {

        Schema::create('janvince_smallgallery_galleries', function($table) {

            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('category_id')->unsigned()->index()->nullable();

            $table->string('name')->nullable();
            $table->string('slug')->nullable()->index();

            $table->text('description')->nullable();
            $table->text('content')->nullable();

            $table->string('url')->nullable()->index();

            $table->datetime('date')->nullable();

            $table->boolean('active')->nullable();
            $table->boolean('favourite')->nullable();

            $table->string('preview_image_media')->nullable();
            $table->text('images_media')->nullable();

            $table->integer('sort_order')->unsigned()->index()->nullable();
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();

            $table->text('repeater')->nullable();
            $table->text('testimonials')->nullable();
            $table->text('content_blocks')->nullable();            

            $table->timestamps();

        });

        Schema::create('janvince_smallgallery_categories', function($table) {
            
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->index()->nullable();

            $table->integer('nest_left')->unsigned()->index()->nullable();
            $table->integer('nest_right')->unsigned()->index()->nullable();
            $table->integer('nest_depth')->unsigned()->index()->nullable();

            $table->integer('sort_order')->unsigned()->index()->nullable();

            $table->string('name')->nullable()->index();
            $table->string('slug')->nullable()->index();

            $table->boolean('active')->nullable();

            $table->text('description')->nullable();
            $table->text('content')->nullable();

            $table->timestamps();

        });

        Schema::create('janvince_smallgallery_galleries_categories', function($table) {
            
            $table->engine = 'InnoDB';

            $table->integer('gallery_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->primary(['gallery_id', 'category_id'], 'janvince_smallgallery_gallery_category');

            $table->timestamps();

        });

        Schema::create('janvince_smallgallery_tags', function($table) {
            
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('name')->nullable()->index();
            $table->string('slug')->nullable()->index();

            $table->boolean('active')->nullable();

            $table->text('description')->nullable();
            $table->text('content')->nullable();

            $table->timestamps();

        });

        Schema::create('janvince_smallgallery_galleries_tags', function($table) {
            
            $table->engine = 'InnoDB';

            $table->integer('gallery_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->primary(['gallery_id', 'tag_id'], 'janvince_smallgallery_gallery_tag');

            $table->timestamps();

        });

        Schema::create('janvince_smallgallery_attributes', function($table) {
            
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('name')->nullable()->index();
            $table->string('slug')->nullable()->index();

            $table->string('value_type')->nullable();

            $table->text('description')->nullable();

            $table->timestamps();

        });

        Schema::create('janvince_smallgallery_galleries_attributes', function($table) {
            
            $table->engine = 'InnoDB';
            $table->integer('gallery_id')->unsigned();

            $table->integer('attribute_id')->unsigned();

            $table->primary(['gallery_id', 'attribute_id'], 'janvince_smallgallery_gallery_attribute');

            $table->char('value_string', 255)->nullable()->index();
            $table->text('value_text')->nullable();
            $table->decimal('value_number', 9, 2)->nullable()->index();
            $table->boolean('value_boolean')->nullable()->index();

            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('janvince_smallgallery_galleries');

        Schema::dropIfExists('janvince_smallgallery_categories');
        Schema::dropIfExists('janvince_smallgallery_galleries_categories');

        Schema::dropIfExists('janvince_smallgallery_attributes');
        Schema::dropIfExists('janvince_smallgallery_galleries_attributes');

        Schema::dropIfExists('janvince_smallgallery_tags');
        Schema::dropIfExists('janvince_smallgallery_galleries_tags');
    }
}
