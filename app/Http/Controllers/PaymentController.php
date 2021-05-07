<?php

namespace App\Http\Controllers;

use App\Events\MakingPayment;
use Illuminate\Http\Request;
use App\Paypal;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $paypal = resolve(Paypal::class);
        return $paypal->handlePayment($request);
    }
    public function approval()
    {
        $paypal = resolve(Paypal::class);
        $payment = $paypal->handleApproval();


        if ($payment->status == 'COMPLETED') {
            return  event(new MakingPayment($payment));
        }
        return redirect('home'); // AQUI PONER UNA VISTA DE QUE NO SE PUDO HACER LA COMPRA CORRECTAMENTE E INTENTAR DE NUEVO 

    }
    public function cancelled()
    {
        return redirect()->route('home'); //VISTA DE CANCELACION DE PARTE DEL USUARIO .. 
    }
}
