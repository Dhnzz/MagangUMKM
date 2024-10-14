<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LandingController extends Controller
{
    public function index()
    {
        $data = [];
        return view('landing.landing-index', compact('data'));
    }
}
