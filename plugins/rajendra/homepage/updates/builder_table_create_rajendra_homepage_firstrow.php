<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRajendraHomepageFirstrow extends Migration
{
    public function up()
    {
        Schema::create('rajendra_homepage_firstrow', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('title');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rajendra_homepage_firstrow');
    }
}
