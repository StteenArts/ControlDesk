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
        Schema::create('report_issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desktop_id')
                ->constrained('desktops')
                ->cascadeOnDelete();

            $table->foreignId('technical_id')
                ->nullable()
                ->constrained('technicals')
                ->nullOnDelete();

            $table->string('title', 150);
            $table->longText('description')->nullable();

            $table->string('priority')->default('receive'); // low, medium, high
            $table->string('status')->default('open'); // open, in_progress, closed

            $table->timestamps();
            $table->dateTime('resolved_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_issues');
    }
};
