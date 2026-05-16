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
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->string('invoice_number')->unique();
            $table->string('title')->nullable();
            $table->unsignedBigInteger('amount'); // Nominal total yang ditagihkan
            $table->unsignedBigInteger('amount_paid')->default(0); // Nominal yang nyata-nyata sudah ditransfer klien
            $table->enum('status', ['draft', 'unpaid', 'partial', 'paid', 'cancelled'])->default('unpaid');
            $table->date('due_date');
            $table->text('notes')->nullable();
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
