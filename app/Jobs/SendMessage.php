<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Helpers\sendmail;
class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
   protected $Customer;
   protected $ex_date;
    public function __construct($Customer,$ex_date)
    {
        $this->Customer=$Customer;
        $this->ex_date=$ex_date;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // info('iam asfdf');

        sendmail('expiration',$this->Customer->email,'exire date the day','');

    }
}
