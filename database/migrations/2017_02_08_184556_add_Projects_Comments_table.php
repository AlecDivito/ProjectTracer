<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProjectComments', function (Blueprint $table) {
            $table->increments('commentId');
            $table->integer('projectId')->unsigned();
            $table->String('comment');
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
        Schema::dropIfExists('ProjectComments');
    }
}
