<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraHomepageAboutsection extends Migration
{
    public function up()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->renameColumn('fourthfirstrowtext', 'fourthrowtext');
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->renameColumn('fourthrowtext', 'fourthfirstrowtext');
        });
    }
}
