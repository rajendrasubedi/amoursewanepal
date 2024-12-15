<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraHomepageAboutsection6 extends Migration
{
    public function up()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->string('frstrwtitle');
            $table->string('scndrwtitle');
            $table->string('thrdrwtitle');
            $table->string('forthrwtitle');
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->dropColumn('frstrwtitle');
            $table->dropColumn('scndrwtitle');
            $table->dropColumn('thrdrwtitle');
            $table->dropColumn('forthrwtitle');
        });
    }
}
