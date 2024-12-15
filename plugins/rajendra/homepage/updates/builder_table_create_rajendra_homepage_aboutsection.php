<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRajendraHomepageAboutsection extends Migration
{
    public function up()
    {
        Schema::create('rajendra_homepage_aboutsection', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('firstrowtext');
            $table->text('firstrowimage');
            $table->text('secondrowtext');
            $table->text('secondrowimage');
            $table->text('thirdrowtext');
            $table->text('thirdrowimage');
            $table->text('fourthfirstrowtext');
            $table->text('fourthrowimage');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rajendra_homepage_aboutsection');
    }
}
