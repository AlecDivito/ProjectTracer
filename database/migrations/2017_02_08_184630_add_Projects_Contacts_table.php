<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProjectContacts', function (Blueprint $table) {
            $table->increments('projectContactId');
            $table->integer('projectId')->unsigned();
            $table->integer('contactId')->unsigned();
            $table->foreign('projectId')->references('projectId')->on('Projects');
            $table->foreign('contactId')->references('contactId')->on('Contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProjectContacts');
    }
}
