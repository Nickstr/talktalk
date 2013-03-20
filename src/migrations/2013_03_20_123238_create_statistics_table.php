<?php

use Illuminate\Database\Migrations\Migration;

class CreateStatisticsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('talktalk::tables.statistics'), function($table) {
            $table->increments('id');
                $table->integer('user_id');
                $table->integer('message_count');
                $table->integer('topic_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(Config::get('talktalk::tables.statistics'));
    }

}