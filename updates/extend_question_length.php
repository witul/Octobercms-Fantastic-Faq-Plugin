<?php namespace LaminSanneh\FantasticFaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class ExtendQuestionLength extends Migration
{

    public function up()
    {
        Schema::table('laminsanneh_fantasticfaq_questions', function($table)
        {
            $table->string('title',1024)->change();
        });
    }

    public function down()
    {
    }

}
