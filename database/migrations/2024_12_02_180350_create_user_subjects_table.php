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
        Schema::create('user_subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profesor_id');
            $table->unsignedBigInteger('subject_id');
<<<<<<< HEAD
            $table->integer('day')->nullable;
            $table->integer('hour')->nullable;
=======
            $table->integer('day');
            $table->integer('hour');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
>>>>>>> 0825866d94523dcf68e1a988f2981af11aea1859
            $table->softDeletes('deleted_at', precision: 0);

            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('profesor_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_subjects');
    }
};
