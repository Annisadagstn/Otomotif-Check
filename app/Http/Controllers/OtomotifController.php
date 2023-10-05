<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otomotif;

class OtomotifController extends Controller
{
    public function landing(){
        return view('landing');
      }

    public function about(){
        return view('about');
      }

    public function blog(){
        return view('blog');
      }

    public function service(){
        return view('service');
      }

    public function contact(){
        return view('contact');
      }

    public function login(){
        return view('login.login');
      }

    public function index(){
      return view('otomotif.index');
    }
   
}
