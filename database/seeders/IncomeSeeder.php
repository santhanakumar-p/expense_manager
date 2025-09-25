<?php

namespace Database\Seeders;

use App\Models\Income;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $incomes = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'amount' => 5000.00,
                'payment_method' => 'Cash',
                'date' => '2025-09-10',
                'notes' => 'Freelance project payment',
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'amount' => 3000.00,
                'payment_method' => 'UPI',
                'date' => '2025-09-11',
                'notes' => 'Online course sale',
            ],
            [
                'user_id' => 2,
                'category_id' => 3,
                'amount' => 4500.00,
                'payment_method' => 'Card',
                'date' => '2025-09-12',
                'notes' => 'Part-time consulting',
            ],
            [
                'user_id' => 2,
                'category_id' => 4,
                'amount' => 6000.00,
                'payment_method' => 'Bank Transfer',
                'date' => '2025-09-13',
                'notes' => 'Project milestone payment',
            ],
            [
                'user_id' => 3,
                'category_id' => 5,
                'amount' => 2500.00,
                'payment_method' => 'Cash',
                'date' => '2025-09-14',
                'notes' => 'Bonus received',
            ],
            [
                'user_id' => 3,
                'category_id' => 6,
                'amount' => 8000.00,
                'payment_method' => 'UPI',
                'date' => '2025-09-15',
                'notes' => 'Client payment',
            ],
            [
                'user_id' => 4,
                'category_id' => 1,
                'amount' => 4000.00,
                'payment_method' => 'Card',
                'date' => '2025-09-16',
                'notes' => 'Salary advance',
            ],
            [
                'user_id' => 4,
                'category_id' => 2,
                'amount' => 3500.00,
                'payment_method' => 'Cash',
                'date' => '2025-09-17',
                'notes' => 'Part-time project',
            ],
            [
                'user_id' => 5,
                'category_id' => 3,
                'amount' => 7000.00,
                'payment_method' => 'Bank Transfer',
                'date' => '2025-09-18',
                'notes' => 'Freelance work',
            ],
            [
                'user_id' => 5,
                'category_id' => 4,
                'amount' => 9000.00,
                'payment_method' => 'UPI',
                'date' => '2025-09-19',
                'notes' => 'Project completion payment',
            ],
        ];

        foreach($incomes as $income) {
            Income::create($income);
        }
    }
}
