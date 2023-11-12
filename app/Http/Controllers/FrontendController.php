<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function about()
    {
        return view('web.about');
    }


    public function contact()
    {
        return view('web.contactus');
    }

    public function Service()
    {
        return view('web.service');

    }

}
