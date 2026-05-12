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
        Schema::create('assigned_desktops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desktop_id')
                ->constrained('desktops')
                ->cascadeOnDelete();

            $table->foreignId('technical_id')
                ->constrained('technicals')
                ->cascadeOnDelete();

            $table->dateTime('assigned_date')->default(now());
            $table->dateTime('returned_date')->nullable();
            $table->string('status')->default('assigned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned_desktops');
    }
};
