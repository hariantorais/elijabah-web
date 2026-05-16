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
        Schema::create('invoice_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('amount'); // Nominal cicilan yang dibayar saat itu
            $table->date('payment_date'); // Tanggal klien melakukan transfer
            $table->string('payment_method'); // Transfer Bank (BCA/Mandiri), Cash, Midtrans, dll.
            $table->string('reference_number')->nullable(); // Nomor resi / bukti transfer
            $table->text('notes')->nullable(); // Catatan tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_payments');
    }
};
