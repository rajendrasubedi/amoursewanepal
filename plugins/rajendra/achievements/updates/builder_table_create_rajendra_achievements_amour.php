<?php namespace Rajendra\Achievements\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRajendraAchievementsAmour extends Migration
{
    public function up()
    {
        Schema::create('rajendra_achievements_amour', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('description');
            $table->dateTime('date');
            $table->string('image');
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rajendra_achievements_amour');
    }
}
