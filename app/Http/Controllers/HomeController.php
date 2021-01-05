<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function shop()
    {
        $packages = Package::paginate(25);
        return view('shop')->with('packs', $packages);
    }

    public function item($id)
    {
        $package = Package::find($id);
        return view('item')->with('pack', $package);
    }
}
