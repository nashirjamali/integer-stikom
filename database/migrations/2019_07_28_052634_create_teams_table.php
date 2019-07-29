<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->string('id')->index();
            $table->primary('id');
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('institution');
            $table->string('status');
            $table->unsignedBigInteger('competition_id');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('competition_id')
                    ->references('id')->on('competition')
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
        Schema::dropIfExists('teams');
    }
}
