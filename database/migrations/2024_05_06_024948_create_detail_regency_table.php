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
        Schema::create('detail_regency', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('regency_id')
                ->unsigned();
            $table->string('name');
            $table->string('position');
            $table->integer('parent_data')
                ->default(0);
            $table->foreign('regency_id', 'regency_id_detail_regency')
                ->references('id')
                ->on('regencies')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_regency');
    }
};
