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
        Schema::create('real_states', function (Blueprint $table) {
            $table->id();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('qrcode')->nullable();
            // $table->bigInteger('agent_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('state_id')->unsigned()->nullable();
            $table->bigInteger('property_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('period_id')->unsigned()->nullable();



            $table->boolean('active')->default(0);

            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('state_id')
            ->references('id')
            ->on('states')
            ->onDelete('cascade');

            $table->foreign('property_id')
            ->references('id')
            ->on('properties')
            ->onDelete('cascade');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

            $table->foreign('period_id')
            ->references('id')
            ->on('periods')
            ->onDelete('cascade');


            // $table->foreign('agent_id')
            // ->references('id')
            // ->on('agents')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_states');
    }
};
