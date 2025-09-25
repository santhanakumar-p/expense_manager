<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'user_id' => 1,
                'type' => 'Expense',
                'name' => 'Lunch at hotel',
            ],
            [
                'user_id' => 1,
                'type' => 'Income',
                'name' => 'Bus ticket',
            ],
            [
                'user_id' => 2,
                'type' => 'Expense',
                'name' => 'Groceries',
            ],
            [
                'user_id' => 2,
                'type' => 'Income',
                'name' => 'Electricity bill',
            ],
            [
                'user_id' => 3,
                'type' => 'Income',
                'name' => 'Movie ticket',
            ],
            [
                'user_id' => 3,
                'type' => 'Expense',
                'name' => 'Pharmacy purchase',
            ],
            [
                'user_id' => 4,
                'type' => 'Expense',
                'name' => 'Dinner with friends',
            ],
            [
                'user_id' => 4,
                'type' => 'Income',
                'name' => 'Auto fare',
            ],
            [
                'user_id' => 5,
                'type' => 'Income',
                'name' => 'Internet bill',
            ],
            [
                'user_id' => 5,
                'type' => 'Expense',
                'name' => 'Clothes purchase',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
