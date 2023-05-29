<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Customer;
use App\Jobs\SendMessage;
use Carbon\Carbon;
class ExpiryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Expiration:customerexpiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'customer expiration with email service';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $Customers=Customer::where('end_date','<',now())->get();
        // dd($Customers);
        foreach($Customers as $Customer){
            info('iam asfdf');
          $ex_date=Carbon::createFromFormat('Y-m-d',$Customer->end_date)->toDateString();
          dispatch(new SendMessage($Customer,$ex_date));
        };
    }
}
