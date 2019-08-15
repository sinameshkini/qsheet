<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_ip');
            $table->string('user_mac_address')->nullable();
            $table->string('mail')->nullable();
            $table->string('mobile')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_user');
    }
}
