<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parameters', function (Blueprint $table) {
            $table->string('hot')->nullable()->change();
            $table->string('crispy')->nullable()->change();
            $table->string('salt')->nullable()->change();
            $table->string('garlic')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parameters', function (Blueprint $table) {
            $table->string('hot')->nullable(false)->change();
            $table->string('crispy')->nullable(false)->change();
            $table->string('salt')->nullable(false)->change();
            $table->string('garlic')->nullable(false)->change();
        });
    }
}
