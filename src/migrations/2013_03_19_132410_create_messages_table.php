<?php

use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('talktalk::tables.messages'), function($table) {
            $table->increments('id');
                $table->integer('user_id');
                $table->integer('topic_id');
                $table->integer('message_id');
                $table->text('entry');
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
        Schema::drop(Config::get('talktalk::tables.messages'));
    }

}