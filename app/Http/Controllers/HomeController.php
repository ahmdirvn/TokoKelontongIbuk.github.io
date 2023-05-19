<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Tentang Kami - Toko Online";
        $viewData["subtitle"] = "Tentang Kami";
        $viewData["description"] = "Toko Kelontong IBUK adalah toko kelontong online terpercaya yang menyediakan berbagai macam kebutuhan sehari-hari Anda.";
        $viewData["author"] = "Developed by: Anake Ibuk";
        return view('home.about')->with("viewData", $viewData);
    }
}
