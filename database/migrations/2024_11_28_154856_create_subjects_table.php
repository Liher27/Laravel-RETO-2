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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->String('subject_name');
            $table->unsignedBigInteger('user_id');
            $table->date('resgitration_date');
            $table->integer('subject_hours');

            $table->unique('user_id');

            $table->foreign('user_id')->references('id')->on('clients')->onDelete('cascade');
           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
