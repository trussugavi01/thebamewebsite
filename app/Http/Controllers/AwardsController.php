<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardsController extends Controller
{
    public function index()
    {
        return view('pages.awards');
    }
}
