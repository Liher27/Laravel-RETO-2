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
        Schema::create('registrations', function (Blueprint $table) {
            
            $table->primary(['id', 'user_id']);
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('user_id');
            $table->date('registration_date');
            $table->integer('school_year');
            $table->softDeletes('deleted_at', precision: 0);
            $table->unique('user_id','id');




            $table->foreign('id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
