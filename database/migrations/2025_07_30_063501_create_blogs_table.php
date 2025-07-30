<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // blog id
            $table->string('cover_image')->nullable(); // cover image path
            $table->string('blog_url')->unique(); // blog url (slug)
            $table->string('title'); // blog title
            $table->text('description'); // blog description
            $table->string('author'); // blog author
            $table->timestamp('created_at')->useCurrent(); // blog created date
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
