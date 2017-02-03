<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage()
    {
    	return view('pages.homepage');
    }

    public function agenda()
    {
        return view('pages.agenda');
    }

    public function nieuws()
    {
    	return view('pages.nieuws');
    }

    public function fotos()
    {
    	return view('pages.fotos');
    }

    public function over_ons()
    {
    	return view('pages.over-ons');
    }

    public function ruimtes()
    {
    	return view('pages.ruimtes');
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}
