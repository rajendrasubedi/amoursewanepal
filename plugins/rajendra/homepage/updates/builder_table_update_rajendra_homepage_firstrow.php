<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraHomepageFirstrow extends Migration
{
    public function up()
    {
        Schema::table('rajendra_homepage_firstrow', function($table)
        {
            $table->integer('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_homepage_firstrow', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
