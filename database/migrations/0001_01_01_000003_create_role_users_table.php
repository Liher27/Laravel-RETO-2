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
        Schema::create('role__users', function (Blueprint $table) {
            $table->foreignId('role_id')->references('id')->on('roles')->onDelete('cascade'); 
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->softDeletes('deleted_at', precision: 0); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role__users');
    }
};