<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->integer('event_id', true);
            $table->date('event_date');
            $table->date('standby_date');
            $table->string('event_name', 50);
            $table->string('location', 50);
            $table->time('starting_time');
            $table->time('standby_time');
            $table->integer('no_of_cams');
            $table->string('special requirements');
            $table->double('balance_amount');
            $table->string('user_created', 20);
            $table->time('time_created');
            $table->string('status', 50);
            $table->integer('package_id');
            $table->integer('quotation_id');
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
        Schema::dropIfExists('events');
    }
}
