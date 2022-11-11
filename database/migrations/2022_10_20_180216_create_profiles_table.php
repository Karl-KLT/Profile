<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('Bio')->nullable();

            $table->string('localBio')->nullable();

            $table->string('Name')->nullable();

            $table->string('Image')->nullable();

            $table->string('USER_SID')->unique();

            $table->string('userType')->default(0); // 0 user | 1 superAdmin

            $table->longText('Message')->nullable();

            $table->string('user_id')->unique();


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
        Schema::dropIfExists('profiles');
    }
};
