<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraHomepageAboutsection2 extends Migration
{
    public function up()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->dropColumn('firstrowimage');
            $table->dropColumn('secondrowimage');
            $table->dropColumn('thirdrowimage');
            $table->dropColumn('fourthrowimage');
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->text('firstrowimage');
            $table->text('secondrowimage');
            $table->text('thirdrowimage');
            $table->text('fourthrowimage');
        });
    }
}
