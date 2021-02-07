<?php namespace Nourbal\Baltesco\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNourbalBaltescoLinks extends Migration
{
    public function up()
    {
        Schema::table('nourbal_baltesco_links', function($table)
        {
            $table->string('type');
            $table->string('title')->nullable();
            $table->dropColumn('facebook');
        });
    }
    
    public function down()
    {
        Schema::table('nourbal_baltesco_links', function($table)
        {
            $table->dropColumn('type');
            $table->dropColumn('title');
            $table->string('facebook', 191);
        });
    }
}
