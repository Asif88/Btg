<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use app\contents;

class TouristController extends Controller
{
        public function store()
    {
        return view('adminView');
    }
}