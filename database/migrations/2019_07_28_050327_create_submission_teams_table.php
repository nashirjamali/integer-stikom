<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('submission_id');
            $table->string('team_id');
            $table->string('document');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('submission_id')
                    ->references('id')->on('submission')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
            $table->foreign('team_id')
                    ->references('id')->on('team')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submission_teams');
    }
}
