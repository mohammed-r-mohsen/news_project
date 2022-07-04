<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->boolean('IsActive')->nullable()->default(true);
            $table->integer('NumberOfNews')->unsigned()->nullable()->default(0);
            $table->string('email', 100)->nullable()->default('example@gmail.com')->unique();
            $table->string('username', 100)->nullable()->default('admin')->unique();
            $table->string('password', 100)->nullable()->default("admin");
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
};
