<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencesShopassignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_assignments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_assignments', function (Blueprint $table) {
            $table->dropForeign(['user_id','shop_id','role_id']);
        });
    }
}
