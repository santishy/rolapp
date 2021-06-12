<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalResponseController extends Controller
{
    public function approval(){
        return view('payments.approved');
    }

    public function failed(){
        return view('payments.failed');
    }
}
