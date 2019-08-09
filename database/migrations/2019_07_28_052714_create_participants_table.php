<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('birth_date');
            $table->string('email');
            $table->string('phone');
            $table->string('tshirt')->nullable();
            $table->string('vegetarian')->nullable();
            $table->string('identity_card');
            $table->string('status');
            $table->string('teams_id')->index();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('teams_id')
                    ->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
