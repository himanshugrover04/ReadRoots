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
        Schema::create('alogin_book', function (Blueprint $table) {
    $table->id();
    $table->foreignId('alogin_id')->constrained('alogins')->onDelete('cascade');
    $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alogin_book');
    }
};
