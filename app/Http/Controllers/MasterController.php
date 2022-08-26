<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class MasterController extends Controller
{
    public function index(){
        return view('layouts.fornt-end.master');
    }
    
  
}
