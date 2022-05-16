<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_usrs', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name');
            $table->string('user_mail')->unique();
            $table->string('user_pass');
            $table->string('user_firs_name');
            $table->string('user_last_name');
            $table->int('user_qual');
            $table->timestamps();
        });

        Schema::create('ref_evnt', function (Blueprint $table) {
            $table->id('evnt_id');
            $table->id('ownr_id');
            $table->string('evnt_name');
            $table->string('evnt_desc');
            $table->string('evnt_date');
            $table->string('evnt_addr');
            $table->string('evnt_link');
            $table->longblob('evnt_img');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
