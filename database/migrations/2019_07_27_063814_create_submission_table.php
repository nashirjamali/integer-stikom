<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->date('date_start');
            $table->date('date_end');
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
        Schema::dropIfExists('submission');
    }
}
