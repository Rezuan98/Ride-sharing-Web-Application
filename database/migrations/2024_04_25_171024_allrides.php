<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('allrides', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('rider_name');
            $table->string('city');
            $table->string('image');
            $table->string('image2')->nullable();
            $table->string('from');
            $table->string('destination');
            $table->string('pick_up_point');
            $table->date('date');
            $table->string('available_seat');
            $table->decimal('fare');
            $table->string('licence_number');
            $table->string('car_model');
            $table->enum('status',['active','inactive'])->default('inactive');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
