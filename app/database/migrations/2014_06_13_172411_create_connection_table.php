<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('connection', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('cdate');
            $table->integer('duration');
            $table->integer('initperson_id')->unsigned();
            $table->integer('answerperson_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('connection', function($table) {
            $table->foreign('initperson_id')->references('id')->on('person');
            $table->foreign('answerperson_id')->references('id')->on('person');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('connection');
	}

}
