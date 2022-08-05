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
        Schema::create('saved_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('record1')->nullable();
            $table->string('record2')->nullable();
            $table->string('record3')->nullable();
            $table->string('record4')->nullable();
            $table->string('record5')->nullable();
            $table->string('record6')->nullable();
            $table->string('record7')->nullable();
            $table->string('record8')->nullable();
            $table->string('record9')->nullable();
            $table->string('record10')->nullable();
            $table->string('record11')->nullable();
            $table->string('record12')->nullable();
            $table->string('record13')->nullable();
            $table->string('record14')->nullable();
            $table->string('record15')->nullable();
            $table->string('record16')->nullable();
            $table->string('record17')->nullable();
            $table->string('record18')->nullable();
            $table->string('record19')->nullable();
            $table->string('record20')->nullable();

            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saved_records');
    }
};
