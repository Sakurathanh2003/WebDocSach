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
        Schema::create('BookView', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('userID')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('bookID')->references('id')->on('Book')->onDelete('cascade');
            $table->foreignId('chapterID')->references('id')->on('Chapter')->onDelete('cascade');
            $table->timestamp('viewed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BookView');
    }
};
