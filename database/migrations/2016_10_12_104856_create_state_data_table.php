<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_data', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('state')->nullable();
            $table->string('state_abr')->nullable();
            $table->decimal('projection_H',3,1)->nullable();

            $table->string('poll1_title')->nullable();
            $table->string('poll1_title_link')->nullable();
            $table->string('poll1_H')->nullable();
            $table->string('poll1_T')->nullable();

            $table->string('poll2_title')->nullable();
            $table->string('poll2_title_link')->nullable();
            $table->string('poll2_H')->nullable();
            $table->string('poll2_T')->nullable();


            $table->string('poll3_title')->nullable();
            $table->string('poll3_title_link')->nullable();
            $table->string('poll3_H')->nullable();
            $table->string('poll3_T')->nullable();

            $table->string('poll4_title')->nullable();
            $table->string('poll4_title_link')->nullable();
            $table->string('poll4_H')->nullable();
            $table->string('poll4_T')->nullable();

            $table->string('poll5_title')->nullable();
            $table->string('poll5_title_link')->nullable();
            $table->string('poll5_H')->nullable();
            $table->string('poll5_T')->nullable();

            $table->integer('electoral_votes')->nullable();

            $table->string('voting_history_2012',1)->nullable();
            $table->string('voting_history_2008',1)->nullable();
            $table->string('voting_history_2004',1)->nullable();
            $table->string('voting_history_2000',1)->nullable();
            $table->string('voting_history_1996',1)->nullable();

            $table->string('voting_history_1992',1)->nullable();
            $table->string('voting_history_1988',1)->nullable();
            $table->string('voting_history_1984',1)->nullable();
            $table->string('voting_history_1980',1)->nullable();
            $table->string('voting_history_1976',1)->nullable();

            $table->integer('vap_2012')->nullable();
            $table->integer('turnout_2012')->nullable();
            $table->date('reg_online')->nullable();
            $table->date('reg_mail')->nullable();
            $table->date('reg_person')->nullable();
            $table->string('color')->nullable();
            $table->text('swing_copy')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('state_data');
    }
}
