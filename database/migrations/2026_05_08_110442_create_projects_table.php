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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreignId('package_id')->constrained()->onDelete('restrict');
            $table->foreignId('client_id')->constrained();
            $table->foreignId('pm_id')->nullable()->constrained('users');
            $table->enum('status', ['discussion', 'on_progress', 'testing', 'maintenance', 'completed'])->default('discussion');
            $table->decimal('total_budget', 15, 2)->default(0);
            $table->date('start_date')->nullable();
            $table->date('deadline')->nullable();
            $table->unsignedInteger('progress_percent')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
