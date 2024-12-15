<?php namespace Rajendra\Achievements\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRajendraAchievementsAmour2 extends Migration
{
    public function up()
    {
        Schema::table('rajendra_achievements_amour', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('rajendra_achievements_amour', function($table)
        {
            $table->string('image', 255);
        });
    }
}
