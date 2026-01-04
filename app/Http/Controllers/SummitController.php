<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummitController extends Controller
{
    public function index()
    {
        return view('pages.summit');
    }
}
