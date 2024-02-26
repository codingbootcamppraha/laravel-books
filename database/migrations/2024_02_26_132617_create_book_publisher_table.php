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
        Schema::create('book_publisher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publisher_id');
            $table->foreignId('book_id');

            $table->unique(['publisher_id', 'book_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_publisher');
    }
};
