<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportersController extends Controller
{
    public function index()
    {
        return view('transporter.transporter');
    }
}
