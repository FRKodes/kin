<?php

namespace App\Http\Controllers;

use Vinkla\Instagram\Instagram;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
		$instagram = new Instagram('27157690.1677ed0.733cc23146064ee9945e030cc9cfd3bb');

		$imgs = $instagram->get();

    	return view('pages.index', compact('imgs'));
    }
}
