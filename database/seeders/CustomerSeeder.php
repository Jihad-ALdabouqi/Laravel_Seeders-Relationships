<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
    'salon_id' => 1,
    'name' => 'Ahmad Ali',
    'phone' => '0790000000',
    'email' => 'ahmad@test.com',
    'credit_card_token' => 'tok_123',
    'coins_balance' => 50
]);

    }
}
