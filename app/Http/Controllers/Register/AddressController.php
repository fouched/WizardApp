<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index()
    {
        return view('register.address');
    }
}
