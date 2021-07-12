<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnNameInEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('balance_amount');
        });

        Schema::table('events', function (Blueprint $table) {
            $table->renameColumn("`special requirements`", 'special_requirements');
            $table->string('user_created', 20)->nullable()->change();
            $table->time('time_created')->nullable()->change();
            $table->string('status', 50)->nullable()->change();
            $table->integer('package_id')->nullable()->change();
            $table->integer('quotation_id')->nullable()->change();

            $table->double('balance_amount')->nullable();
            $table->integer('customer_id')->nullable();
        });

        Schema::table('events', function (Blueprint $table) {
            $table->string("`special_requirements`")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
    }
}
