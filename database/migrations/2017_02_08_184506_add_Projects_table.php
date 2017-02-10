<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Projects', function (Blueprint $table) {
            $table->increments('projectId');        // UniqueID for the project
            $table->integer('userId')->unsigned();  // References the user table
            $table->string('projectTitle');         // Field Size 25
            $table->string('projectDescription');   // Field Size 250
            $table->string('priority');             // Field Size 15
            $table->string('referenceNum');         // Field Size 25
            $table->decimal('moneyBudget', 11, 2);
            $table->decimal('moneyToDate', 11, 2);
            $table->integer('hoursBudget');          // Field Size Integer
            $table->integer('hoursToDate');          // Field Size Integer
            $table->dateTime('dateDue');
            $table->string('Status');               // Field Size 15
            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Projects');
    }
}
