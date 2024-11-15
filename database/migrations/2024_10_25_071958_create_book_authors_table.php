<?php

use App\Models\Author;
use App\Models\Book;
use Illuminate\Container\Attributes\Auth;
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
        Schema::create('book_authors', function (Blueprint $table) {
            $table->foreignIdFor(Book::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Author::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_authors');
    }
};
