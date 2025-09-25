<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expenses = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'amount' => 250.00,
                'payment_method' => 'Cash',
                'date' => '2025-09-15',
                'notes' => 'Lunch at hotel',
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'amount' => 120.50,
                'payment_method' => 'UPI',
                'date' => '2025-09-16',
                'notes' => 'Bus ticket',
            ],
            [
                'user_id' => 2,
                'category_id' => 3,
                'amount' => 800.00,
                'payment_method' => 'Card',
                'date' => '2025-09-17',
                'notes' => 'Groceries',
            ],
            [
                'user_id' => 2,
                'category_id' => 4,
                'amount' => 1500.00,
                'payment_method' => 'Netbanking',
                'date' => '2025-09-18',
                'notes' => 'Electricity bill',
            ],
            [
                'user_id' => 3,
                'category_id' => 5,
                'amount' => 300.00,
                'payment_method' => 'Cash',
                'date' => '2025-09-19',
                'notes' => 'Movie ticket',
            ],
            [
                'user_id' => 3,
                'category_id' => 6,
                'amount' => 450.75,
                'payment_method' => 'UPI',
                'date' => '2025-09-20',
                'notes' => 'Pharmacy purchase',
            ],
            [
                'user_id' => 4,
                'category_id' => 1,
                'amount' => 600.00,
                'payment_method' => 'Card',
                'date' => '2025-09-21',
                'notes' => 'Dinner with friends',
            ],
            [
                'user_id' => 4,
                'category_id' => 2,
                'amount' => 80.25,
                'payment_method' => 'Cash',
                'date' => '2025-09-22',
                'notes' => 'Auto fare',
            ],
            [
                'user_id' => 5,
                'category_id' => 4,
                'amount' => 1200.00,
                'payment_method' => 'Netbanking',
                'date' => '2025-09-23',
                'notes' => 'Internet bill',
            ],
            [
                'user_id' => 5,
                'category_id' => 3,
                'amount' => 950.50,
                'payment_method' => 'Card',
                'date' => '2025-09-24',
                'notes' => 'Clothes purchase',
            ],
        ];

        foreach ($expenses as $expense) {
            Expense::create($expense);
        }
    }
}
