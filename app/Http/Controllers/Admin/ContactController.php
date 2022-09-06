<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('admin.Contact.index');
    }
    
    public function Contactform(){
        return view('admin.Contact.create');
    }
}
