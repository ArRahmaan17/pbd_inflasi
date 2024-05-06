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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->longText('content');
            $table->enum('type', [
                'pu_news',
                'pu_announcement',
                'pr_news',
                'pr_announcement'
            ])->default('pu_news');
            $table->string('photo')->default('assets/media/misc/city.png');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('regency_id')->unsigned();
            $table->foreign('user_id', 'news_user_id')
                ->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('regency_id', 'news_regency_id')
                ->references('id')->on('regencies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
