<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function ServicesView()    {
        return view('frontend.services');
    }

    public function AboutView()    {
        return view('frontend.about');
    }

    public function ContactView()    {
        return view('frontend.contact');
    }

    public function PrivacyView()    {
        return view('frontend.privacy-policy');
    }
    public function DigitalMarketingView()    {
        return view('frontend.digital-marketing');
    }
}
