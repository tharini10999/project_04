<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        return view('admin.Type.index');
    }
    
    public function Typeform(){
        return view('admin.Type.create');
    }
}
