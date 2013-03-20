<?php

use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('talktalk::tables.topics'), function($table) {
            $table->increments('id');
                $table->integer('user_id');
                $table->integer('category_id');
                $table->integer('message_count');
                $table->integer('pinned');
                $table->string('title');
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
        Schema::drop(Config::get('talktalk::tables.topics'));
    }

}