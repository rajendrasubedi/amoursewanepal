<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraHomepageDonatesection extends Migration
{
    public function up()
    {
        Schema::table('rajendra_homepage_donatesection', function($table)
        {
            $table->text('bnk_name')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_homepage_donatesection', function($table)
        {
            $table->string('bnk_name', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
