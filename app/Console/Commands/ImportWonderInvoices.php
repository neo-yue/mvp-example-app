<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportWonderInvoices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:wonder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import wonder invoices';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $dir = "storage/app/wonder";

        // Open the folder 
        
        // List files in the folder

        // Loop through file line by line

        // Save the invoice data into DB

        // Archive $file into archive folder        

        return Command::SUCCESS;
    }
}
