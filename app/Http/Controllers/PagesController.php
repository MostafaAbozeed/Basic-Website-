<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
      return view('home');
    }
    public function getabout(){
      return view('/about');
    }
    public function getContact(){
      return view('/contact');
    }
}
