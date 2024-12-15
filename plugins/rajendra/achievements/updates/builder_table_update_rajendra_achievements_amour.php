<?php namespace Rajendra\Achievements\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraAchievementsAmour extends Migration
{
    public function up()
    {
        Schema::table('rajendra_achievements_amour', function($table)
        {
            $table->dropColumn('date');
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_achievements_amour', function($table)
        {
            $table->dateTime('date');
        });
    }
}
