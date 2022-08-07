<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index(){
        // dd('test');
        $userLogined = Auth::check();
        // dd(!$userLogined);
        if (!$userLogined) {
            return redirect('/login');
        } return view('index');
    }
}
