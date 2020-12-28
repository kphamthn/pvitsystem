<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }
    
    public function service(){
        return view('services');
    }
    

    public function setlocale(Request $request) {
        session()->put('locale', $request->locale);
        return redirect()->route('home');
    }

}
