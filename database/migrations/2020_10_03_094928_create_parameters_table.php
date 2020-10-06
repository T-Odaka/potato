<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('hot');
            $table->integer('crispy');
            $table->integer('garlic');
            $table->integer('salt');
            $table->integer('fk_parameters_potato_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('fk_parameters_potato_id')->references('id')->on('potatos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parameters');
    }
}
