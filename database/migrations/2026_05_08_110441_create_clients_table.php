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
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name'); // Nama PIC
            $table->string('email')->unique();
            $table->string('phone')->nullable(); // Nomor WhatsApp
            $table->string('company_name')->nullable();
            $table->text('address')->nullable();
            $table->text('internal_notes')->nullable(); // Catatan rahasia Anda tentang klien ini
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
