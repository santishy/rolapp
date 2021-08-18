<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialEventController extends Controller
{
    //
    public function index()
	{
		return view('social_events.index');
	}
}
