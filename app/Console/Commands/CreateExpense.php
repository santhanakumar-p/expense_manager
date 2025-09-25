<?php

namespace App\Console\Commands;

use App\Models\Expense;
use Illuminate\Console\Command;

class CreateExpense extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:expense';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new expense record';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $userId = $this->ask('Enter User ID');
        $categoryId = $this->ask('Enter Category ID');
        $amount = $this->ask('Enter Amount');
        $paymentMethod = $this->ask('Enter Payment Method (Cash, UPI, Card)');
        $date = $this->ask('Enter Date (YYYY-MM-DD)');
        $notes = $this->ask('Enter Notes (optional)');

        Expense::create([
            'user_id' => $userId,
            'category_id' => $categoryId,
            'amount' => $amount,
            'payment_method' => $paymentMethod,
            'date' => $date,
            'notes' => $notes,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->info('Expense record created successfully!');
        return Command::SUCCESS;
    }
}
