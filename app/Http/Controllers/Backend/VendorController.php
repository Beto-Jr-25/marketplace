<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function dashbord()
    {
        return view('vendor/dashboard');
    }
}
