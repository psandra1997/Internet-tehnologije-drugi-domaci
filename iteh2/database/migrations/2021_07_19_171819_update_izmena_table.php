<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateIzmenaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('izmena', function (Blueprint $table) {
            $table->renameColumn('name','promenaImena');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('izmena', function (Blueprint $table) {
            $table->renameColumn('promenaImena','name');
        });
    }
}
