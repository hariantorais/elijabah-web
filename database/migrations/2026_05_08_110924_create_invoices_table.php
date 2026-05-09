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
        Schema::create('invoices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('project_id')->constrained()->onDelete('cascade');
            $table->string('invoice_number')->unique(); // Contoh: INV-2024-001
            $table->decimal('amount', 15, 2);
            $table->enum('type', ['down_payment', 'final_payment', 'full_payment', 'maintenance']);
            $table->enum('status', ['unpaid', 'paid', 'expired', 'refunded'])->default('unpaid');
            $table->timestamp('due_date')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->string('payment_receipt_path')->nullable(); // Lokasi file bukti transfer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
