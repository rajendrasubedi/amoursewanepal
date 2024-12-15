<?php namespace Rajendra\HomePage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRajendraHomepageDonatesection extends Migration
{
    public function up()
    {
        Schema::create('rajendra_homepage_donatesection', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('bnk_name');
            $table->text('acc_holder_name');
            $table->bigInteger('acc_no');
            $table->integer('bnk_code');
            $table->integer('swift_code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rajendra_homepage_donatesection');
    }
}
