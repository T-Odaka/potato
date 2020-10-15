<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('descriptions', function (Blueprint $table) {
            $table->string('description')->nullable()->change();
            $table->string('image_url')->nullable()->default('/img/noimage.jpg')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('descriptions', function (Blueprint $table) {
            $table->string('description')->nullable(false)->change();
            $table->string('image_url')->nullable(false)->default('')->change();
        });
    }
}
