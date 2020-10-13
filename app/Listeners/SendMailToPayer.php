<?php

namespace App\Listeners;

use App\Events\MakingPayment;
use App\Mail\PaymentReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMailToPayer
{
    
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  MakingPayment  $event
     * @return void
     */
    public function handle(MakingPayment $event)
    {
        Mail::to($event->payment->payer->email_address)->send(new PaymentReceived($event->payment));
    }
}
