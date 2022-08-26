<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class CactusController extends Controller
{
    public function index(){
        return view('layouts.fornt-end.cactus');
    }
    
  
}
