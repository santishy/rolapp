<?php

namespace App\Http\Controllers;
use Mail; 
use App\Mail\ContactCall;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
		public function sendContact(Request $request) {
			try {
				Mail::to("domisol_alrja@hotmail.com")->send(new ContactCall($request));

			} catch(\Exception $e){
				return back()->withErrors(['No fue posible enviar tu mensaje, inténtalo nuevamente más tarde']);
			}
			
			return back()->with('success','¡Gracias por contactarme!, te responderé a la brevedad');
		}
}
