<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    $cars = Car::with('features')->orderBy('position','asc')->get();

        return view('pages.homepage',compact('cars'));
    }
     public function heathrowairport()
    {

        return view('pages.heathrow_airport');
    }
      public function gatwickairport()
    {

        return view('pages.gatwick_airport');
    }
     public function stanstedairport()
    {

        return view('pages.stansted_airport');
    }
    public function lutonairport()
    {

        return view('pages.luton_airport');
    }
    public function londoncityairport()
    {

        return view('pages.london_city_airport');
    }
    public function southhamptoncruiseport()
    {

        return view('pages.southhampton_cruiseport');
    }
     public function portsmouthcruiseport()
    {

        return view('pages.portsmouth_port');
    }
    public function harwirchcruiseport()
    {

        return view('pages.HarwirchCruise_port');
    }
    public function dovercruiseport()
    {

        return view('pages.DoverCruise_port');
    }
     public function tilburydocs()
    {

        return view('pages.tilburydocs_port');
    }
     public function cityairporttowestminster()
    {

        return view('pages.cityairporttowestminister');
    }
     
     public function GatwicktoCanaryWharf()
    {

        return view('pages.gatwicktocan');
    }
     public function HeathrowtoChelsea()
    {

        return view('pages.heathrowtochelsea');
    }
     public function LutontoSouthKensington()
    {

        return view('pages.lutontosouthkosington');
    }
     public function StanstedtoKingcross()
    {

        return view('pages.StanstedtoKing_cross');
    }



     public function LondontoOxford()
    {

        return view('pages.londontooxford');
    }
        public function LondontoManchester()
        {
    
            return view('pages.londontomanchester');
        }
        public function LondontoCambridge()
        {
    
            return view('pages.londontocambridge');
        }
        public function LondontoBrimingham()
        {
    
            return view('pages.londontobrimingham');
        }
        public function LondontoBath()
        {
    
            return view('pages.LondontoBath');
        }


          public function FAQs()
        {
    
            return view('pages.faqs');
        }
        public function TermsAndConditions()
        {
    
            return view('pages.terms_and_conditions');
        }
        public function PrivacyPolicy()
        {
            return view('pages.Privacy_Policy');
        }
        public function Blogs()
        {
    
            return view('pages.Blogs');
        }
        public function ContactUs()
        {
            return view('pages.contactus');
        }

}
