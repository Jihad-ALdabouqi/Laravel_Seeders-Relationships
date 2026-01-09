<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
    'salon_id' => 1,
    'customer_id' => 1,
    'service_amount' => 10.00,
    'coins_earned' => 5,
    'transaction_date' => now()
]);

    }
}
