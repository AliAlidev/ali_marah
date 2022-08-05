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
        Schema::table('real_states', function(Blueprint $table){
            $table->string('real_estate_type')->nullable();
            $table->float('rent_amount')->default(0);
            $table->float('amount')->default(0);
            $table->float('area')->default(0);
            $table->float('total_area')->default(0);
            $table->integer('sleep_room_count')->default(0);
            $table->integer('bath_room_count')->default(0);
            $table->float('floor_height')->default(0);
            $table->string('direction')->nullable();
            $table->string('moqaula_perc')->nullable();
            $table->integer('chalet_layout_number')->default(0);
            $table->text('description')->nullable();
            $table->text('vedio_links')->nullable();
            $table->json('options')->nullable();
            $table->string('address_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
