<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinenToReceiveController extends Controller
{
    public function index(Type $var = null)
    {
        $data = LinenToReceiveController::all();

        return view('menu_linen/linen_to_receive/index', compact('data'));
    }
}
