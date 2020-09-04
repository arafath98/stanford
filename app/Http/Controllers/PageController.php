<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    public function showHomePage(){
        $page_title = 'Home Page';

        return view('frontend.pages.home', \get_defined_vars());
    }

    public function showAboutPage(){
        $page_title = 'About';

        return view('frontend.pages.about', \get_defined_vars());
    }

}
