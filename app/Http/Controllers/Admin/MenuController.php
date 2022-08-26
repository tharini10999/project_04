<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('admin.Menu.index');
    }
    
    public function Menuform(){
        return view('admin.Menu.create');
    }
}
