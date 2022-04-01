<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about_us;

class serviceController extends Controller
{
    public function about(){
        return view('about', [
            'services' => about_us::print()
        ]);
    }

    public function post($slug){
        return view('service', [
            'service' => about_us::select($slug)
        ]);
    }
}
