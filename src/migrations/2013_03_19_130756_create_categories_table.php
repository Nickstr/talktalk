<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( Config::get('talktalk::tables.categories'), function($table) {
            $table->increments('id');
                $table->string('title');
                $table->integer('topic_count');
                $table->integer('post_count');
                $table->integer('level');
                $table->integer('category_id');
                $table->integer('order');
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
        Schema::drop( Config::get('talktalk::tables.categories') );
    }

}