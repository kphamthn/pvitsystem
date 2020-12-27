<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function home() {
        return view('home');
    }

    public function setlocale(Request $request) {
        session()->put('locale', $request->locale);
        return redirect()->route('home');
    }

}
