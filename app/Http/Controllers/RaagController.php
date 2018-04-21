<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raag;

class RaagController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $raags = Raag::all();
        return view('raag.list', ['raags' => $raags]);
    }

    public function showIntroduction($name)
    {
        return view('raag.introduction', ['name' => $name]);
    }
}
