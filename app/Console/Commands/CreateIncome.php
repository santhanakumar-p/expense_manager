<?php

namespace App\Console\Commands;

use App\Models\Income;
use Illuminate\Console\Command;

class CreateIncome extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:income';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new income record';

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

        Income::create([
            'user_id' => $userId,
            'category_id' => $categoryId,
            'amount' => $amount,
            'payment_method' => $paymentMethod,
            'date' => $date,
            'notes' => $notes,
        ]);

        $this->info('Income record created successfully!');
        return Command::SUCCESS;
    }
}
