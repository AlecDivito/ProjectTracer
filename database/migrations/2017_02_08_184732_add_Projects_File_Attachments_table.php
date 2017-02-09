<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsFileAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProjectFileAttachments', function (Blueprint $table) {
            $table->increments('fileId');
            $table->integer('projectId')->unsigned();
            $table->String('fileDescription');
            $table->String('fileName');
            $table->String('fileLocation');
            $table->foreign('projectId')->references('projectId')->on('Projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProjectFileAttachments');
    }
}
