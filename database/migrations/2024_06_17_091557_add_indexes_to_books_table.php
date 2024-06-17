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
        Schema::table('books', function (Blueprint $table) {
            $table->unique('slug');
            $table->index('title');
            $table->index('category_id');
            $table->index('price');
            $table->index('publication_date');
            $table->unique('isbn');
            $table->fulltext('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropIndex('books_slug_unique');
            $table->dropIndex('books_isbn_unique');
            $table->dropIndex('books_title_index');
            $table->dropIndex('books_category_id_index');
            $table->dropIndex('books_price_index');
            $table->dropIndex('books_publication_date_index');
            $table->dropIndex('books_description_fulltext');
        });
    }
};
