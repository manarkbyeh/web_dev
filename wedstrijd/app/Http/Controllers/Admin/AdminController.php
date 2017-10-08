<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Match;
class AdminController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $matches = Match::orderBy('match_id', 'desc')->get();
        
        return view('admin.matches.index', compact('matches'));
    }
    
    public function datatable() {
        
        return view('admin.datatable');
    }
}