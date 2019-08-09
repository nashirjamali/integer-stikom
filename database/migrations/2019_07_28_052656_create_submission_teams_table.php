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
            $table->string('teams_id');
            $table->string('document');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('submission_id')
                    ->references('id')->on('submissions')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
                    
            $table->foreign('teams_id')
                    ->references('id')->on('teams')
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
