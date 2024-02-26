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
            $table->unique('isbn');
            $table->index('title');
            $table->index('category_id');
            $table->index('price');
            $table->index('publication_date');
            $table->fullText('description');

            // also might be:
            // NOTE: 
            // adding an array inside the index() (or unique()) will create a compound index
            // more info about that here: https://reneroth.xyz/composite-indices-in-laravel/
            // $table->unique(['slug', 'isbn']);
            // $table->index(['title', 'category_id', 'price', 'publication_date']);
            // $table->fulltext('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropIndex('books_category_id_index');
            $table->dropIndex('books_description_fulltext');
            $table->dropIndex('books_isbn_unique');
            $table->dropIndex('books_price_index');
            $table->dropIndex('books_publication_date_index');
            $table->dropIndex('books_slug_unique');
            $table->dropIndex('books_title_index');
        });
    }
};
