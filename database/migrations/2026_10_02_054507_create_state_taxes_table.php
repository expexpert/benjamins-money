<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('state_taxes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('state_id')->constrained('states')->onDelete('cascade');

            $table->string('tax_name')->default('Sales Tax');
            $table->decimal('tax_rate', 5, 2);

            $table->boolean('is_active')->default(true);

            $table->date('effective_from')->nullable();
            $table->date('effective_to')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['state_id', 'tax_name', 'deleted_at']);

            $table->index('is_active');
            $table->index('state_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('state_taxes');
    }
};
