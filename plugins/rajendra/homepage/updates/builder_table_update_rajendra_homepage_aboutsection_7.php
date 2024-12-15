<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraHomepageAboutsection7 extends Migration
{
    public function up()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->text('frstrwtitle')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->text('scndrwtitle')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->text('thrdrwtitle')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->text('forthrwtitle')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_homepage_aboutsection', function($table)
        {
            $table->string('frstrwtitle', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('scndrwtitle', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('thrdrwtitle', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('forthrwtitle', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
