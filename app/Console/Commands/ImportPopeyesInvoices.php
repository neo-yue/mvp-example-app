<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Invoice;

use Illuminate\Support\Facades\DB;

class ImportPopeyesInvoices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:popeyes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import popeyes invoices';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        // Folder path containing Popeyes Invoices
        $dir = "storage/app/popeyes";

        // Open the folder 
        if ($handle = opendir($dir)) 
        {

            // List files in the folder
            while (false !== ($file = readdir($handle))) 
            {

                // Skip anything that is not a txt file
                if (substr($file,-4) != '.txt')
                    continue;

                // Open file pointer to $input ==> $f
                echo "opening: $file \n";
                if (!$f = @fopen("$dir/$file", "r"))
                {
                    echo "File fopen fail \n";
                    break;            
                }

                // initialize totals
                $total = 0;
                $subtotal = 0;
                $taxes = 0;
                $invoice_date = "";
                $invoice_no = "";

                // Loop through file line by line
                while ($row = fgets($f, 10000)) 
                {
                    // break each line down into words
                    $line = preg_replace('/\s+/', ' ',$row); // remove convert duplicate spaces to single spaces
                    echo "$line \n";
                    $words = explode(" ", trim($line)); // $words is an array of words from $line
                    //print_r($words);

                    //set $total
                    //set $subtotal
                    //set $taxes
                    //set $invoice_date
                    //set $invoice_no
                }

                // Save the invoice data into DB

                // Archive $file into archive folder

            }
        }
                    
        return Command::SUCCESS;
    }
}
