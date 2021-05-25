<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimekeepingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeeping_records', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->integer('clockin');
            $table->integer('clockout');
            $table->integer('total');
            $table->unsignedBigInteger('timekeeping_record_id')->index();
            $table->timestamps();

            $table->foreign('timekeeping_record_id')->references('id')->on('timekeeping');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timekeeping_records');
    }
}
