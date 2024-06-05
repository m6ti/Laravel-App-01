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
        if(!Schema::hasTable('hashtags'))
            Schema::create('hashtags', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->timestamps();
            });
        if(!Schema::hasTable('post_hashtag'))
            Schema::create('post_hashtag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Hashtag::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Post::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            });
        if(!Schema::hasTable('comment_hashtag'))
            Schema::create('comment_hashtag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Hashtag::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Comment::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hashtags');
        Schema::dropIfExists('post_hashtag');
        Schema::dropIfExists('comment_hashtag');
    }
};
