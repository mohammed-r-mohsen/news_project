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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoryid')->references('id')->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ;
            $table->foreignId('authorid')->references('id')->on('admins')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('Title', 100)->nullable()->default('live');
            $table->string('body', 200)->nullable()->default('body');
            $table->string('img', 100)->nullable()->default('text');
            $table->softDeletes();
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
        Schema::dropIfExists('news');
    }
};
