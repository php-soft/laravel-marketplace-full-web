<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update2UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->date('date_of_birth');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('district_id');
            $table->string('address');
            $table->string('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('phone_number');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('city_id');
            $table->dropColumn('country_id');
            $table->dropColumn('district_id');
            $table->dropColumn('address');
            $table->dropColumn('avatar');
        });
    }
}
