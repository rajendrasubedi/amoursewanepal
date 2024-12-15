<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraHomepageDonatesection3 extends Migration
{
    public function up()
    {
        Schema::table('rajendra_homepage_donatesection', function($table)
        {
            $table->integer('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_homepage_donatesection', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
