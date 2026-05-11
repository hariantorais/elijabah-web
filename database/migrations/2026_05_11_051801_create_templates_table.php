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
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->unique(); // Contoh: EDU-01, PORT-01
            $table->string('category_slug'); // education, portfolio
            $table->string('category_label'); // Pendidikan & Institusi
            $table->string('route'); // Nama route untuk demo
            $table->string('name');
            $table->text('desc');
            $table->string('image')->nullable(); // Path file preview
            $table->json('palette'); // Menyimpan array warna hex
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};
