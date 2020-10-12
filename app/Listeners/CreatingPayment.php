<?php

namespace App\Listeners;

use App\Events\MakingPayment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Payment; 

class CreatingPayment
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MakingPayment  $event
     * @return void
     */
    public function handle(MakingPayment $event)
    {
        Payment::create([
            'id' => $event->payment->id,
            'email' => $event->payment->email,
            'status' => $event->payment->status,
        ]);      
    }
}
