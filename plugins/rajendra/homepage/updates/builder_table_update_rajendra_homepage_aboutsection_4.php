<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraHomepageAboutsection4 extends Migration
{
    public function up()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->increments('id')->unsigned()->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->integer('id')->unsigned(false)->default(1)->change();
        });
    }
}
