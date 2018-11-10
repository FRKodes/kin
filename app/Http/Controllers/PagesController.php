<?php

namespace App\Http\Controllers;

use Vinkla\Instagram\Instagram;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
		$instagram = new Instagram('7027966829.1677ed0.4b9b39fbe7b14eb78354a991103df7bd');

		$imgs = $instagram->get();

    	return view('pages.index', compact('imgs'));
    }

}
