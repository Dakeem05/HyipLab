<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view("website.home");
    }

    public function about()
    {
        return view("website.about");
    }

    public function contact()
    {
        return view("website.contact");
    }
    public function faq()
    {
        return view("website.faq");
    }
    public function privacy_policy()
    {
        return view("website.privacy-policy");
    }
    public function terms_and_condtitions()
    {
        return view("website.terms-and-condtitions");
    }
}
