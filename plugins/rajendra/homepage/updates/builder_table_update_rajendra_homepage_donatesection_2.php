<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraHomepageDonatesection2 extends Migration
{
    public function up()
    {
        Schema::table('rajendra_homepage_donatesection', function($table)
        {
            $table->text('swift_code')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_homepage_donatesection', function($table)
        {
            $table->integer('swift_code')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
