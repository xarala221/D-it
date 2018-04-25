<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membre;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membre::get();
        $membresBureau = Membre::where('type','!=', 'simple')->get();
        $data = [];
        $data["nombreMembre"] = count($membres);
        $data["nombreMembreBureau"] = count($membresBureau);
        return  view('home', compact('data'));
    }
}
