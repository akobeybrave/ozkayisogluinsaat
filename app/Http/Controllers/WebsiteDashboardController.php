<?php

namespace App\Http\Controllers;

class WebsiteDashboardController extends Controller
{
    public function dashboard()
    {
        return view("website.website-dashboard");
    }
}