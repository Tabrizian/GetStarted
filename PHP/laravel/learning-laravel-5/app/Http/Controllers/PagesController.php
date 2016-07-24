<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }
}
