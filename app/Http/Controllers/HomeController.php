<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Izolasyon;
use App\Models\Izolasyonimages;
use App\Models\Mimari;
use App\Models\Mimariimages;
use App\Models\Setting;
use App\Models\Tadilat;
use App\Models\Tadilatimages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tadilat = Tadilat::where('id', 1)->first();
        $mimari = Mimari::where('id', 1)->first();
        $izolasyon = Izolasyon::where('id', 1)->first();
        $categories = Category::all();
        return view('frontend.index', compact('tadilat', 'categories', 'mimari', "izolasyon"));
    }

    public function about(){

        $page = "HAKKIMIZDA";

        return view("frontend.about", compact("page"));
    }

    public function contact(){

        $page = "İLETİŞİM";
        $setting = Setting::find(1);

        return view("frontend.contact", compact("page", "setting"));
    }



    public function tadilat(){

        $page = "TADİLAT";
        $tadilat = Tadilat::where('id', 1)->first();
        $tadilatImages = Tadilatimages::all();

        return view("frontend.tadilat", compact("page", "tadilat", "tadilatImages"));
    }

    public function cizim(){

        $page = "MİMARİ ÇİZİM";
        $mimari = Mimari::where('id', 1)->first();
        $mimariImages = Mimariimages::all();
        return view("frontend.cizim", compact("page", "mimari", "mimariImages"));
    }

    public function izolasyon(){

        $page = "İZOLASYON";
        $izolasyon = Izolasyon::where('id', 1)->first();
        $izolasyonImages = Izolasyonimages::all();
        return view("frontend.izolasyon", compact("page", "izolasyon", "izolasyonImages"));
    }

}
