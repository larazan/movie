<?php

namespace App\Console\Commands;

use App\Actions\Newsletter\SendWeeklySummaryAction;
use Illuminate\Console\Command;

class SendSummary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:summary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send weekly email summary';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(SendWeeklySummaryAction $sendWeeklySummaryAction)
    {
        $sendWeeklySummaryAction->run();
        // dd('test custom command');
    }
}
