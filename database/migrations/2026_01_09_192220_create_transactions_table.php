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
        Schema::create('transactions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('salon_id')->constrained()->cascadeOnDelete();
    $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
    $table->decimal('service_amount', 8, 2);
    $table->integer('coins_earned');
    $table->integer('coins_used')->default(0);
    $table->dateTime('transaction_date');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
