<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;

class DetailsController extends Controller
{
    public function index()
    {
        return view('register.details');
    }
}
